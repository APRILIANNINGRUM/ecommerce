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
        $user = auth()->guard('customer')->user();
        if (!$user) {
            return redirect()->route('customer.login');
        }
        $cart = Cart::where('customer_id', $user->id)->where('product_id', $request->product_id)->first();

        //if user not found
        if(!$user){
            return redirect()->route('login');
        }

        if($cart){
            $cart->quantity = $cart->quantity + $request->qty;
            $cart->total = $cart->total + ($request->price * $request->qty);
            $cart->save();
        }else{
            $cart = new Cart;
            $cart->customer_id = $user->id;
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
            return redirect()->route('customer.login');
        }


        $carts = Cart::with('product')->where('customer_id', auth()->guard('customer')->user()->id)->get();
        $subtotal = 0;
        foreach($carts as $cart){
            $subtotal = $subtotal + $cart->total;
        }

  
        $total = 0;
        foreach($carts as $cart){
            $total = $total + $cart->quantity;
        }

        return view('ecommerce.cart', compact('carts', 'subtotal', 'total'));
      
    }

    
        private function getCarts()
    {
        $carts = json_decode(request()->cookie('dw-carts'), true);
        $carts = $carts != '' ? $carts:[];
        return $carts;
    }
    public function checkout()
    { 
            $provinces = Province::find(10);
            $carts = Cart::with('product')->where('customer_id', auth()->guard('customer')->user()->id)->get();
            $subtotal = 0;
            foreach($carts as $cart){
                $subtotal = $subtotal + $cart->total;
            }

            $totalproduct = 0;
            foreach($carts as $cart){
                $totalproduct = $totalproduct + $cart->quantity;
            }
    
            $user = Customer::where('id', auth()->guard('customer')->user()->id)->first();

            return view('ecommerce.checkout', compact('provinces','subtotal', 'user', 'totalproduct'));
        
    }
    public function getCity(Request $request)
    {
        //get parameter province_id
        $cities = City::find([398, 399]);
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

            $carts = Cart::with('product')->where('customer_id', auth()->guard('customer')->user()->id)->get();
            $subtotal = 0;
            foreach($carts as $cart){
                $subtotal = $subtotal + $cart->total;
            }

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
                'subtotal' => $subtotal + 150000
            ]);

            foreach ($carts as $row) {
                $product = Product::where('id', $row->product_id)->first();
                OrderDetail::create([
                    'order_id' => $order->id,
                    'product_id' => $row->product_id,
                    'price' => $row->price,
                    'qty' => $row->quantity,
                    'weight' => $product->weight,
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
        Cart::where('customer_id', auth()->guard('customer')->user()->id)->delete();
        $order = Order::with(['district.city'])->where('invoice', $invoice)->first();
        //after that delete all cart
        Cart::where('customer_id', auth()->guard('customer')->user()->id)->delete();
        return view('ecommerce.checkout_finish', compact('order'));
    }
    //kalo ngupdate pake Request $request di parameter
    //parameternya diisi atuh
    public function updateCart(Request $request ,$id){
     
        //token csrf
        $cart = Cart::find($id);
        $cart->quantity = $request->qty;
        $cart->total = $request->qty * $cart->price;
        
        $cart->save();

        //return redirect to cart page
        return redirect()->route('front.cart');

    }
    public function totalCart(){

        $cart = Cart::where('customer_id', auth()->guard('customer')->user()->id)->count();
    
        if(!auth()->guard('customer')->check()){
            $cart = 0;
        }
        return response()->json($cart);
    }
    public function deleteCart($id){
        //silakan diisi sendiri

        //token csrf
        $cart = Cart::find($id);
        $cart->delete();

        //return redirect to cart page
        return redirect()->route('front.cart');
    }
}
