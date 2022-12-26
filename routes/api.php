<?php
use App\Http\Controllers\Ecommerce\CartController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('city', 'App\Http\Controllers\Ecommerce\CartController@getCityRajaongkir'); //ROUTE API UNTUK /CITY
//route for calculate shipping cost
Route::get('total/cart', 'App\Http\Controllers\Ecommerce\FrontController@getCartTotal'); //ROUTE API UNTUK /TOTAL/CART
Route::post('cost', 'App\Http\Controllers\Ecommerce\CartController@getCostRajaongkir'); //ROUTE API UNTUK /COST
Route::get('district', 'App\Http\Controllers\Ecommerce\CartController@getDistrict'); //ROUTE API UNTUK /DISTRICT
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/midtrans-callback', 'App\Http\Controllers\Ecommerce\CartController@midtransCallback');