<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Customer;
use App\Province;
use App\City;
use App\District;


class ProfileController extends Controller
{
    public function index ()
    {
        $customer = Customer::with(['province', 'city', 'district'])->where('id', auth()->guard('customer')->user()->id)->first();
        $provinces = Province::all();
        $cities = City::all();
        return response()->json($customer);
    }

}
