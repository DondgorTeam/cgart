<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::group(['middleware' => ['web']], function () {

    Route::get('/', 'HomeController@index');

    Route::post('admin/login','MainController@login_admin_panel');
    Route::get('admin/login', function(){

        return view('auth/adminlogin');
    });
    Route::group(['middleware' => ['admins']], function () {   
        Route::get('admin',function(){
            return 'Welcome to admin panel';
        });
        Route::get('category', 'CategoryController@category');
    });

    
    Route::get('artworks', 'PicturesController@artworks');
    Route::get('artwork/{id}', 'PicturesController@artworkShow');

    // Authentication routes...
    Route::auth();
});

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('{user}', 'UserController@index');
    Route::get('createImage', 'UserController@createImage');
    Route::get('setting/{id}', 'UserController@setting');
    
    Route::resource('categories', 'CategoryController');
    Route::resource('pictures', 'PicturesController');
    
    Route::get('user/profile', function () {
        // Uses Auth Middleware
    });
});