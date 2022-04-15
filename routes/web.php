<?php

use Illuminate\Support\Facades\Auth;
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
    return redirect()->route('login-page');
});


Route::get('/dang-nhap', 'LoginController@index')->name('login-page')->middleware('login.check');

Route::post('/dang-nhap','LoginController@login')->name('login');

Route::prefix('admin')->group(function(){
    Route::get('/','LoginController@adminHome')->name('admin-home')->middleware('cookies.check','role.admin');
});

Route::get('/trang-chu/nhan-vien','LoginController@shipperHome')->name('shipper-home')->middleware('cookies.check','role.shipper');
Route::get('/trang-chu/khach-hang','LoginController@CustomerHome')->name('customer-home')->middleware('cookies.check','role.customer');
