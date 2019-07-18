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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/products', 'ProductController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/country', 'HomeController@getCountry')->name('get.country');
Route::get('/checkout', 'HomeController@checkout')->name('checkout');
Route::post('/getway', 'HomeController@getWay')->name('get.way');
Route::get('/getway', 'HomeController@getWayGet')->name('get.way.get');
