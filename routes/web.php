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
Route::view('/index','index')->name('index');
Route::post('/pay','paymentController@pay')->name('payment');
Route::get('/success','paymentController@success');
Route::get('/error','paymentController@error');
Route::view('/pageFail','paymentFail')->name('pageFail');
Route::view('/pageSuccess','success')->name('pageSuccess');