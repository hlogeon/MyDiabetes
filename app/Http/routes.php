<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('common.login_signup');
});

// Authentication routes...
Route::get('auth/login', ['uses' => 'Auth\AuthController@getLogin', 'as' => 'get_login']);
Route::post('auth/login', ['uses' => 'Auth\AuthController@postLogin', 'as' => 'post_login']);
Route::get('auth/logout', ['uses' => 'Auth\AuthController@getLogout', 'as' => 'get_logout']);

// Registration routes...
Route::get('auth/register', ['uses' => 'Auth\AuthController@getRegister', 'as' => 'get_register']);
Route::post('auth/register', ['uses' => 'Auth\AuthController@postRegister', 'as' => 'post_register']);