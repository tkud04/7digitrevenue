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

#Route::get('/', function(){return "<h2 style='color: red;'>Out of service</h2>";});

Route::get('/', 'MainController@getIndex');
Route::get('make-money', 'MainController@getMakeMoney');
Route::get('training', 'MainController@getTraining');
Route::post('training', 'MainController@postTraining');
Route::get('contact', 'MainController@getContact');
Route::post('contact', 'MainController@postContact');
Route::post('signup', 'MainController@postSignup');
Route::get('subscribe', 'MainController@getSubscribe');
Route::get('product', 'MainController@getProduct');


