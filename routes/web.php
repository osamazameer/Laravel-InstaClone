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

Auth::routes();

Route::get('/p/create', 'PostsController@create');
Route::post('/p', 'PostsController@store');
Route::post('/update', 'ProfilesController@update');
Route::get('/profile/edit/{userID}', 'ProfilesController@edit');
Route::get('/p/{postID}', 'PostsController@show');

Route::get('/profile/{userVal}', 'ProfilesController@index')->name('profile');
