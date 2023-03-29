<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\Hash;
use App\Province;
use App\City;
use App\District;

use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Support\Facades\Validator;


class ProfileController extends Controller
{
    public function index ()
    {
        $customer = Customer::with(['province', 'city', 'district'])->where('id', auth()->guard('customer')->user()->id)->first();
     
        $provinces = Province::where('id', $customer->district->province_id)->orderBy('name', 'ASC')->get();
        $cities = City::where('id', $customer->district->city_id)->orderBy('name', 'ASC')->get();
        $districts = District::where('id', $customer->district_id)->orderBy('name', 'ASC')->get();
        return view('ecommerce.profile', compact('customer', 'provinces', 'cities','districts'));
        // return response()->json([
        //     'customer' => $customer,
        //     'provinces' => $provinces,
        //     'cities' => $cities,
        //     'districts' => $districts,
           
        // ]);
    }

    public function edit ($id)
    {
        $customer = Customer::with(['province', 'city', 'district'])->where('id', auth()->guard('customer')->user()->id)->first();
     
        $provinces = Province::where('id', $customer->district->province_id)->orderBy('name', 'ASC')->get();
        $cities = City::where('id', $customer->district->city_id)->orderBy('name', 'ASC')->get();
        $districts = District::where('id', $customer->district_id)->orderBy('name', 'ASC')->get();
        return view('ecommerce.edit', compact('customer', 'provinces', 'cities','districts'));
        // return response()->json([
        //     'customer' => $customer,
        //     'provinces' => $provinces,
        //     'cities' => $cities,
        //     'districts' => $districts,
           
        // ]);
    }       
    
    public function update (Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->name = request('name');
        $customer->email = request('email');
        $customer->phone_number = request('phone_number');
        $customer->address = request('address');
       //hash passsword
        $password = Hash::make(request('password'));
        $customer->password = $password;

        $customer->save();
        return redirect()->route('customer.profile');

    }

}
