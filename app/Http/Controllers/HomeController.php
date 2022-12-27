<?php

namespace App\Http\Controllers;
use App\Product;
use App\Customer;
use App\Order;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $total_product = Product::count();
        $total_user = Customer::where('created_at', '>=', date('Y-m-d', strtotime('-7 days')))->count();
        $total_order = Order::where('status', 2)->count();
        $order_not_process = Order::where('status', 1)->count();
        return view('home', compact('total_product', 'total_user', 'total_order', 'order_not_process'));
    }
    
}
