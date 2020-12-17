<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login\vendorLoginController;
use App\Http\Controllers\productContoller;
use App\Http\Controllers\orderController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/vendorLogin', function () {
    return view('vendorLogin');
});
Route::get('/user', [UserController::class, 'index']);

Route::post('/vendorLogin1', [vendorLoginController::class, 'authenticate']);
Route::get('/vendorLogout', [vendorLoginController::class, 'logout']);

Route::get('/makeProduct', function () {
    return view('vendorMakeProduct');
});

Route::post('/product', [productContoller::class, 'store']);
Route::get('/product/getProduct', [productContoller::class, 'getProduct']);

Route::get('/order/getOrderForVendor/{id}', [orderController::class, 'getOrderForVendor']);

Route::get('/order/{id}', [orderController::class, 'store']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
