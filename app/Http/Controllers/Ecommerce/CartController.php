<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Payment;
use App\Province;
use App\City;
use App\District;
use Kavist\RajaOngkir\Facades\RajaOngkir;
use App\Customer;
use App\Http\Controllers\Ecommerce\FrontController;
use App\Order;
use App\OrderDetail;
use Illuminate\Support\Str;
use DB;
use App\Mail\CustomerRegisterMail;
use Mail;

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
                'product_weight' => $product->weight,
                'product_name' => $product->name,
                'product_price' => $product->price,
                'product_image' => $product->image
            ];
        }
        $cookie = cookie('dw-carts', json_encode($carts), 2880);
        return redirect()->back()->cookie($cookie);
    }
        public function listCart()
    {
        $carts = json_decode(request()->cookie('dw-carts'), true);
        $total = (new FrontController)->getCartTotal();
        $subtotal = collect($carts)->sum(function($q) {
            return $q['qty'] * $q['product_price'];
        });
        return view('ecommerce.cart', compact('carts', 'subtotal', 'total'));
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
        $provinces = Province::orderBy('created_at', 'DESC')->get();
        $carts = $this->getCarts();
        $total = (new FrontController)->getCartTotal();
        $subtotal = collect($carts)->sum(function($q) {
            return $q['qty'] * $q['product_price'];
        });
        return view('ecommerce.checkout', compact('provinces', 'carts', 'subtotal', 'total'));
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
            'courier' => 'required',
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
                'courier' => $request->courier,
                'subtotal' => $request->total
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
        if (!$order) {
            abort(404);
        }
        $total = (new FrontController)->getCartTotal();
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;
        $transaction_details = array(
            'order_id' => $order->invoice,
            'gross_amount' => $order->subtotal,
        );
        $customer_details = array(
            'first_name' => $order->customer_name,
            'email' => $order->customer->email,
            'phone' => $order->customer_phone,
        );
        $order = Order::with(['details.product'])->where('invoice', $invoice)->first();

        $enable_payments = array('gopay', 'bank_transfer', 'credit_card');
        $transaction_data = array(
            'transaction_details' => $transaction_details,
            'customer_details' => $customer_details,
            'enabled_payments' => $enable_payments,
            'order' => $order,
        );
        $snapToken = \Midtrans\Snap::getSnapToken($transaction_data);
        return view('ecommerce.checkout_finish', compact('order', 'total', 'snapToken','order'));
    }


    public function getCityRajaongkir(Request $request)
    {
        $cities = City::where('province_id', request()->province_id)->get();
        return response()->json(['status' => 'success', 'data' => $cities]);
    }

    public function getCostRajaongkir(Request $request)
    {
        $origin = 398;
        $destination = request()->city_id;
        $weight = request()->weight;
        $courier = request()->courier;
        $key = env('RAJAONGKIR_API_KEY');
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "origin=$origin&destination=$destination&weight=$weight&courier=$courier",
            CURLOPT_HTTPHEADER => array(
                "content-type: application/x-www-form-urlencoded",
                "key: $key"
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            return response()->json(['status' => 'error', 'message' => $err]);
        } else {
            return response()->json(['status' => 'success', 'data' => json_decode($response, true)]);
        }
    }

    public function midtransCallback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id . $request->status_code . $request->gross_amount . $serverKey);

        $order = Order::where('invoice', $request->order_id)->first();
        if (!$order) {
            return view('errors.404');
        }
        if($hashed == $request->signature_key){
            if($request->transaction_status == 'capture'){
                if($request->status_code == '200'){
                    $order = Order::where('invoice', $request->order_id)->first();
                    $order->update([
                        'status' => 1,
                    ]);

                    $payment = Payment::create([
                        'order_id' => $order->id,
                        'name' => $order->customer_name,
                        'transfer_to' => $request->payment_type . ' - ' . $request->bank,
                        'transfer_date' => date('Y-m-d'),
                        'amount' => $order->subtotal,
                        'status' => 1,
                        'proof' => 'Midtrans',
                    ]);
                }
            }else if($request->transaction_status == 'settlement'){
                $order = Order::where('invoice', $request->order_id)->first();
                $order->update([
                    'status' => 1,
                ]);

                $payment = Payment::create([
                    'order_id' => $order->id,
                    'name' => $order->customer_name,
                    'transfer_to' => $request->payment_type . ' - ' . $request->bank,
                    'transfer_date' => date('Y-m-d'),
                    'amount' => $order->subtotal,
                    'status' => 1,
                    'proof' => 'Midtrans',
                ]);
            }else if($request->transaction_status == 'pending'){
                $order = Order::where('invoice', $request->order_id)->first();
                $order->update([
                    'status' => 0,
                ]);

                $payment = Payment::create([
                    'order_id' => $order->id,
                    'name' => $order->customer_name,
                    'transfer_to' => $request->payment_type . ' - ' . $request->bank,
                    'transfer_date' => date('Y-m-d'),
                    'amount' => $order->subtotal,
                    'status' => 2,
                    'proof' => 'Midtrans',
                ]);
            }else if($request->transaction_status == 'deny'){
                $order = Order::where('invoice', $request->order_id)->first();
                $order->update([
                    'status' => 0,
                ]);

                $payment = Payment::create([
                    'order_id' => $order->id,
                    'name' => $order->customer_name,
                    'transfer_to' => $request->payment_type . ' - ' . $request->bank,
                    'transfer_date' => date('Y-m-d'),
                    'amount' => $order->subtotal,
                    'status' => 0,
                    'proof' => 'Midtrans',
                ]);
            }else if($request->transaction_status == 'expire'){
                $order = Order::where('invoice', $request->order_id)->first();
                $order->update([
                    'status' => 0,
                ]);

                $payment = Payment::create([
                    'order_id' => $order->id,
                    'name' => $order->customer_name,
                    'transfer_to' => $request->payment_type . ' - ' . $request->bank,
                    'transfer_date' => date('Y-m-d'),
                    'amount' => $order->subtotal,
                    'status' => 0,
                    'proof' => 'Midtrans',
                ]);
            }else if($request->transaction_status == 'cancel'){
                $order = Order::where('invoice', $request->order_id)->first();
                $order->update([
                    'status' => 0,
                ]);

                $payment = Payment::create([
                    'order_id' => $order->id,
                    'name' => $order->customer_name,
                    'transfer_to' => $request->payment_type . ' - ' . $request->bank,
                    'transfer_date' => date('Y-m-d'),
                    'amount' => $order->subtotal,
                    'status' => 0,
                    'proof' => 'Midtrans',
                ]);
                
            }
            
        }

    }
    
}
 