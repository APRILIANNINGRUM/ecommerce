<?php

namespace App\Http\Controllers\Ecommerce;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use App\Customer;

class RegisterController extends Controller
{
    public function index()
    {
        return view('ecommerce.register');
    }
    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:customers,email',
            'password' => 'required|min:6',
            'phone_number' => 'required',
        ]);
        $customer = Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone_number' => $request->phone_number,
            'address' => null,
            'district_id' => null,
            'activate_token' => Str::random(30),
                    'status' => false
        ]);
        return redirect()->route('front.index');
    }
}