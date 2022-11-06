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
Route::get('/network', function () {return view('network');})->name('network');
Route::get('/vibrate', function () {return view('vibrate');})->name('vibrate');
Route::get('/clipboard', function () {return view('clipboard');})->name('clipboard');
Route::get('/full', function () {return view('full');})->name('full');
Route::get('/battery', function () {return view('battery');})->name('battery');
Route::get('/online', function () {return view('online_offline');})->name('online');
Route::get('/geolocation', function () {return view('geolocation');})->name('geolocation');
Route::get('/bluetooth', function () {return view('bluetooth');})->name('bluetooth');
