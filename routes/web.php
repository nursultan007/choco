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

Route::resource('status', 'Admin\\StatusController');
Route::get('users', 'Admin\\myUsersController@index');
Route::get('user/create', 'Admin\\myUsersController@create');
Route::post('user', 'Admin\\myUsersController@store');
Route::get('user/{user}', 'Admin\\myUsersController@show');
Route::get('user/{user}/edit', 'Admin\\myUsersController@edit');
Route::delete('user/{user}', 'Admin\\myUsersController@destroy');
Route::patch('user/{user}', 'Admin\\myUsersController@update');