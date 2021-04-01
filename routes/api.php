<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::apiResource('user/', 'ProfilesController');

Route::get('user/{userID}', 'ProfilesController@showUserAPI');
Route::get('user/', 'ProfilesController@showUsers');
Route::post('user/', 'ProfilesController@InsertUsers');
Route::put('userUpdate/{id}', 'ProfilesController@UpdateUsers');
Route::delete('userDelete/{id}', 'ProfilesController@DeleteUsers');
