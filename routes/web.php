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

Route::resource('/','PlaceController');
Route::resource('places','PlaceController');
Route::resource('customer','CustomerController');

Route::post('/customer/submit/{id}', 'CustomerController@submit');


Route::resource('search','SearchController');