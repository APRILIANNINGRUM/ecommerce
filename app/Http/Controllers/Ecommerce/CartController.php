<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Province;
use App\City;
use App\District;
use App\Customer;
use App\Order;
use App\OrderDetail;
use Illuminate\Support\Str;
use DB;
use App\Mail\CustomerRegisterMail;
use Mail;
use App\Cart;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $this->validate($request, [
            'product_id' => 'required|exists:products,id',
            'qty' => 'required|integer'
        ]);

        $carts = json_decode($request->cookie('dw-carts'), true); 
        if ($carts && array_key_exists($request->product_id, $carts)) {
            $carts[$request->product_id]['qty'] += $request->qty;
        } else {
            $product = Product::find($request->product_id);
            $carts[$request->product_id] = [
                'qty' => $request->qty,
                'product_id' => $product->id,
                'product_name' => $product->name,
                'product_price' => $product->price,
                'product_image' => $product->image
            ];
        }
        $cookie = cookie('dw-carts', json_encode($carts), 2880);
        return redirect()->back()->cookie($cookie);
    }
    public function addCart(Request $request){
       
        //if (!auth()->guard('customer')->check()) {
        $cart = Cart::where('customer_id', $request->customer_id)->where('product_id', $request->product_id)->first();
        if($cart){
            $cart->quantity = $cart->quantity + $request->qty;
            $cart->total = $cart->total + ($request->price * $request->qty);
            $cart->save();
        }else{
            $cart = new Cart;
            $cart->customer_id = $request->customer_id;
            $cart->product_id = $request->product_id;
            $cart->price = $request->price;
            $cart->quantity = $request->qty;
            $cart->total = $request->price * $request->qty;
            $cart->status = 0;
            $cart->save();
        }

        return redirect()->back()->with('success', 'Berhasil menambahkan ke keranjang');
        // return response()->json(['status' => 'success', 'message' => 'Berhasil menambahkan ke keranjang']);
    }

    public function showCart(){
   
        if (!auth()->guard('customer')->check()) {
            return redirect()->route('login');
        }

        elseif(Cart::where('customer_id', auth()->guard('customer')->user()->id)->count() == 0){
            return redirect()->route('home')->with('error', 'Keranjang anda masih kosong');
        }
        else{
            $carts = Cart::with('product')->where('customer_id', auth()->guard('customer')->user()->id)->get();
            $total = 0;
            foreach($carts as $cart){
                $total = $total + $cart->total;
            }
            return view('ecommerce.cart', compact('carts', 'total'));
        }
      


    }
    
    public function updateCart(Request $request)
    {
        $carts = json_decode(request()->cookie('dw-carts'), true);
        foreach ($request->product_id as $key => $row) {
            if ($request->qty[$key] == 0) {
                unset($carts[$row]);
            } else {
                $carts[$row]['qty'] = $request->qty[$key];
            }
        }
        $cookie = cookie('dw-carts', json_encode($carts), 2880);
        return redirect()->back()->cookie($cookie);
    }
    
        private function getCarts()
    {
        $carts = json_decode(request()->cookie('dw-carts'), true);
        $carts = $carts != '' ? $carts:[];
        return $carts;
    }
    public function checkout()
    {
        if (!auth()->guard('customer')->check()) {
            return redirect()->route('login');
        }
        else
        {
            $provinces = Province::orderBy('created_at', 'DESC')->get();
            $carts = Cart::with('product')->where('customer_id', auth()->guard('customer')->user()->id)->get();
            $subtotal = 0;
            foreach($carts as $cart){
                $subtotal = $subtotal + $cart->total;
            }
    
            $user = Customer::where('id', auth()->guard('customer')->user()->id)->first();

            return view('ecommerce.checkout', compact('provinces','subtotal', 'user'));
        }
    }
    public function getCity(Request $request)
    {
        $cities = City::where('province_id', request()->province_id)->get();
        return response()->json(['status' => 'success', 'data' => $cities]);
    }

    public function getDistrict(Request $request)
    {
        $districts = District::where('city_id', request()->city_id)->get();
        return response()->json(['status' => 'success', 'data' => $districts]);
    }
    public function processCheckout(Request $request)
    {
        $this->validate($request, [
            'customer_name' => 'required|string|max:100',
            'customer_phone' => 'required',
            'email' => 'required|email',
            'customer_address' => 'required|string',
            'province_id' => 'required|exists:provinces,id',
            'city_id' => 'required|exists:cities,id',
            'district_id' => 'required|exists:districts,id'
        ]);

        DB::beginTransaction();
        try {
            $customer = Customer::where('email', $request->email)->first();

            if (!auth()->guard('customer')->check() && $customer) {
                return redirect()->back()->with(['error' => 'Silahkan Login Terlebih Dahulu']);
            }

            $carts = $this->getCarts();
            $subtotal = collect($carts)->sum(function($q) {
                return $q['qty'] * $q['product_price'];
            });

            if (!auth()->guard('customer')->check()) {
                $password = Str::random(8);
                $customer = Customer::create([
                    'name' => $request->customer_name,
                    'email' => $request->email,
                    'password' => $password,
                    'phone_number' => $request->customer_phone,
                    'address' => $request->customer_address,
                    'district_id' => $request->district_id,
                    'activate_token' => Str::random(30),
                    'status' => false
                ]);
            }

            $order = Order::create([
                'invoice' => Str::random(4) . '-' . time(),
                'customer_id' => $customer->id,
                'customer_name' => $customer->name,
                'customer_phone' => $request->customer_phone,
                'customer_address' => $request->customer_address,
                'district_id' => $request->district_id,
                'subtotal' => $subtotal
            ]);

            foreach ($carts as $row) {
                $product = Product::find($row['product_id']);
                OrderDetail::create([
                    'order_id' => $order->id,
                    'product_id' => $row['product_id'],
                    'price' => $row['product_price'],
                    'qty' => $row['qty'],
                    'weight' => $product->weight
                ]);
            }
            
            DB::commit();

            $carts = [];
            $cookie = cookie('dw-carts', json_encode($carts), 2880);
            if (!auth()->guard('customer')->check()) {
                Mail::to($request->email)->send(new CustomerRegisterMail($customer, $password));
            }
            return redirect(route('front.finish_checkout', $order->invoice))->cookie($cookie);
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
    public function checkoutFinish($invoice)
    {
        $order = Order::with(['district.city'])->where('invoice', $invoice)->first();
        return view('ecommerce.checkout_finish', compact('order'));
    }
}
