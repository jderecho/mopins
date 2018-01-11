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

Route::get('/', 'PinterestController@show');
Route::post('/pins', 'PinterestController@pins');

Route::group(['middleware' => 'use.ssl'], function(){
	Route::get('/access', 'PinterestController@access');
});