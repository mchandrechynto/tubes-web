<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderAdminController;
use App\Http\Controllers\DashboardAdminController;

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

// LANDING PAGE
Route::get('/', function () {
    return view('index');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/order', function () {
    return view('order');
});

// CONTROLLER ORDER
Route::resource('order', OrderController::class);


// PANEL ADMIN
Route::get('/admin', function () {
    return view('admin/login');
});
Route::resource('dashboard-admin', DashboardAdminController::class)->middleware('auth');
Route::resource('order-admin', OrderAdminController::class)->middleware('auth');

// AUTH
Route::get('admin', 'App\Http\Controllers\AuthController@index')->name('login');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');
