<?php

namespace App\Http\Controllers\Ecommerce;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use App\Customer;
use App\Mail\CustomerRegisterMail;
use Mail;


class RegisterController extends Controller
{
    public function index()
    {
        return view('ecommerce.register');
    }
    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:100',
            'phone_number' => 'required',
            'email' => 'required|email',
            'password' => 'required'
            
        ]);
        try {
            $customer = Customer::where('email', $request->email)->first();

            if (!auth()->guard('customer')->check() && $customer) {
                return redirect()->back()->with(['error' => 'Silahkan Login Terlebih Dahulu']);
            }

            if (!auth()->guard('customer')->check()) {
                $address = 'No Address';
                $password = $request->password;
                $customer = Customer::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => $request->password,
                    'phone_number' => $request->phone_number,
                    'activate_token' => Str::random(30),
                    'address' => $address,
                    'district_id' => 1,
                    'status' => 1
                ]);
            }
            if (!auth()->guard('customer')->check()) {
                Mail::to($request->email)->send(new CustomerRegisterMail($customer, $password));
            }
            return redirect()->route('member/login')->with(['success' => 'Register Berhasil, Silahkan Cek Email Anda']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}