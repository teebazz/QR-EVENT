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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/verify/{hash?}', 'HomeController@verify')->name('home');
Route::post('verify-attendant', 'HomeController@verifyAttendant')->name('verify-attendant');
Route::post('register-attendant/{id}', 'HomeController@registerAttendant')->name('register-attendant');
Route::get('get-attendant/{qr_code}', 'HomeController@getAttendant')->name('get-attendant');


