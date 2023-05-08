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
    }

    public function edit ($id)
    {
        $customer = Customer::with(['province', 'city', 'district'])->where('id', auth()->guard('customer')->user()->id)->first();
     
        $provinces = Province::where('id', $customer->district->province_id)->orderBy('name', 'ASC')->get();
        $cities = City::where('id', $customer->district->city_id)->orderBy('name', 'ASC')->get();
        $districts = District::where('id', $customer->district_id)->orderBy('name', 'ASC')->get();

    
        $allcities = City::where('id', 398)->orWhere('id', 399)->orderBy('name', 'ASC')->get();
        $allprovinces = Province::where('id', 11)->orWhere('id', 12)->orderBy('name', 'ASC')->get();
        $alldistricts = District::where('city_id', 398)->orWhere('city_id', 399)->orderBy('name', 'ASC')->get();
        return view('ecommerce.edit', compact('customer', 'provinces', 'cities','districts', 'allprovinces', 'allcities', 'alldistricts'));
      
    }       
    
    public function update (Request $request)
    {
        $customer = Customer::findOrFail(auth()->guard('customer')->user()->id);
        $this->validate($request, [
            'name' => 'required|string|max:100',
            'phone_number' => 'required|max:15',
            'address' => 'required|string',
            'password' => 'nullable|string|min:6'
        ]);

        $data = $request->only('name', 'phone_number', 'address', 'district_id');
        if ($request->password != '') {
            $data['password'] = $request->password;
        }
        $customer->update($data);
        return redirect()->route('customer.profile')->with(['success' => 'Profile Berhasil Diupdate']);
        
    }

}
