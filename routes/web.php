<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

#ORDERS
Route::get('/orders', 'OrdersController@index');
Route::get('orders/create', 'OrdersController@create');
Route::get('orders/driver', 'OrdersController@indexDriver');
Route::get('/order/edit/driver/{id}', 'OrdersController@editDriver');
Route::get('/order/delete/{id}', 'OrdersController@destroy');
Route::post('/order/save', 'OrdersController@store');
Route::post('/order/edit_save_driver', 'OrdersController@updateFromDriver');
Route::post('/order/edit_save_admin', 'OrdersController@updateFromAdmin');

#PAYMENTS
Route::get('/payments', 'OrdersController@paymentByOrders');
Route::get('/payments/driver', 'OrdersController@paymentByOrdersDriver');
Route::post('/payments/search', 'OrdersController@getPaymentByDriver');
Route::post('/payments/search/driver', 'OrdersController@getPaymentByDriverPage');

#DRIVERS
Route::get('/drivers', 'DriversController@index');
Route::get('driver/create', 'DriversController@create');
Route::post('/driver/save', 'DriversController@store');
Route::get('/driver/delete/{id}', 'DriversController@destroy');