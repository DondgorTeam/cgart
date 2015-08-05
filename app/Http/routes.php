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
    return view('home');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', [ 'as' => 'auth.register', 'uses' => 'Auth\AuthController@getRegister' ]);
Route::post('auth/register', [ 'as' => 'auth.register.post', 'uses' => 'Auth\AuthController@postRegister' ]);

Route::group(['middleware' => 'auth'], function () {
	Route::get('dashboard', 'DashboardController@dashboard');
    Route::get('user/{id}', 'DashboardController@index');
    Route::post('user/{id}', 'DashboardController@updateProfile');
    // Route::get('/dashboard', 'ProfileController@updateProfile');
    Route::get('user/profile', function () {
        // Uses Auth Middleware
    });
});

