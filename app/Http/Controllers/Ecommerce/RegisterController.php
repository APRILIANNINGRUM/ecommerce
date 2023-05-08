<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Customer;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('ecommerce.register');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:customers',
            'password' => 'required|min:6',
            'phone_number' => 'required',
            'address' => 'required',
     
        ]);
         
        $customer = Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'district_id' => 399,
            'status' => 1,
            'activate_token' => null
        ]);

        return redirect()->route('front.index')->with('success', 'Register Success');
    
    }

}
