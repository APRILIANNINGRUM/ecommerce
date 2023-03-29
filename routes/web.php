<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'App\Http\Controllers\Ecommerce\FrontController@index')->name('front.index');
Route::get('/category/{slug}', 'App\Http\Controllers\Ecommerce\FrontController@categoryProduct')->name('front.category');
Route::get('/product/{slug}', 'App\Http\Controllers\Ecommerce\FrontController@show')->name('front.show_product');
Route::get('/product', 'App\Http\Controllers\Ecommerce\FrontController@product')->name('front.product');
Route::post('cart', 'App\Http\Controllers\Ecommerce\CartController@addToCart')->name('front.cart');
Route::post('cart/add', 'App\Http\Controllers\Ecommerce\CartController@addCart')->name('front.add_cart');
Route::get('/cart', 'App\Http\Controllers\Ecommerce\CartController@showCart')->name('front.cart');
Route::post('/cart/update/{id}', 'App\Http\Controllers\Ecommerce\CartController@updateCart')->name('front.update_cart');
Route::get('/checkout', 'App\Http\Controllers\Ecommerce\CartController@checkout')->name('front.checkout');
Route::post('/checkout', 'App\Http\Controllers\Ecommerce\CartController@processCheckout')->name('front.store_checkout');
Route::get('/checkout/{invoice}', 'App\Http\Controllers\Ecommerce\CartController@checkoutFinish')->name('front.finish_checkout');
Route::get('/signup','App\Http\Controllers\Ecommerce\RegisterController@index')->name('signup');
Route::post('/signup','App\Http\Controllers\Ecommerce\RegisterController@store')->name('signup');
Route::get('/city/{province_id}', 'App\Http\Controllers\Ecommerce\CartController@getCity'); //ROUTE API UNTUK /CITY
Route::get('/google-autocomplete', 'App\Http\Controllers\GoogleController@index') ->name ('index'); //ROUTE API UNTUK GOOGLE-AUTOCOMPLETE
Route::get('/about', 'App\Http\Controllers\Ecommerce\FrontController@about') ->name ('about');
Route::get('total/cart', '\App\Http\Controllers\Ecommerce\CartController@totalCart')->name('customer.totalCart');


Route::group(['prefix' => 'member', 'namespace' => 'Ecommerce'], function() {
    Route::get('login', '\App\Http\Controllers\Ecommerce\LoginController@loginForm')->name('customer.login'); 
    Route::get('verify/{token}', '\App\Http\Controllers\Ecommerce\FrontController@verifyCustomerRegistration')->name('customer.verify');
    Route::post('login', '\App\Http\Controllers\Ecommerce\LoginController@login')->name('customer.post_login');
    Route::group(['middleware' => 'customer'], function() {
        Route::get('dashboard', '\App\Http\Controllers\Ecommerce\LoginController@dashboard')->name('customer.dashboard');
        Route::get('logout', '\App\Http\Controllers\Ecommerce\LoginController@logout')->name('customer.logout');
        Route::get('orders', '\App\Http\Controllers\Ecommerce\OrderController@index')->name('customer.orders');
        Route::get('orders/{invoice}', '\App\Http\Controllers\Ecommerce\OrderController@view')->name('customer.view_order');
        Route::get('payment', '\App\Http\Controllers\Ecommerce\OrderController@paymentForm')->name('customer.paymentForm');
        Route::post('payment', '\App\Http\Controllers\Ecommerce\OrderController@storePayment')->name('customer.savePayment');
        Route::get('profile', '\App\Http\Controllers\Ecommerce\ProfileController@index')->name('customer.profile');
        Route::get('profile/edit/{id}', '\App\Http\Controllers\Ecommerce\ProfileController@edit')->name('customer.edit_profile');
        Route::post('profile/update/{id}', '\App\Http\Controllers\Ecommerce\ProfileController@update')->name('customer.update_profile');
    
    });
});

Auth::routes();
Route::group(['prefix' => 'administrator', 'middleware' => 'auth'], function() {
    Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
    Route::resource('category', 'App\Http\Controllers\CategoryController')->except(['create', 'show']);
    Route::resource('product', 'App\Http\Controllers\ProductController')->except(['show']);
    Route::resource('product', 'App\Http\Controllers\ProductController');
    Route::group(['prefix' => 'orders'], function() {
        Route::get('/', 'App\Http\Controllers\OrderController@index')->name('orders.index');
        Route::get('/{invoice}', 'App\Http\Controllers\OrderController@view')->name('orders.view');
        Route::get('/payment/{invoice}', 'App\Http\Controllers\OrderController@acceptPayment')->name('orders.approve_payment');
        Route::post('/shipping', 'App\Http\Controllers\OrderController@shippingOrder')->name('orders.shipping');
        Route::delete('/{id}', 'App\Http\Controllers\OrderController@destroy')->name('orders.destroy');   
        
    });
});

?>  


