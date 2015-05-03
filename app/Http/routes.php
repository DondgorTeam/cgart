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
// usage inside a laravel route


//Route::get('/', function()
//{
//    $img = Image::make(file_get_contents('http://1x.com/images/user/e38ee9fae5b63bdcb12b15cc2529c92e-hd2.jpg'));
//    $filename = 'zaan';
//    $path = public_path() .'/images/';
//
//    $img->save("$path $filename .jpg", 100)
//        ->crop(300, 300)
//        ->save($path  . $filename . '-300x300' . '.jpg');
//
//    // create response and add encoded image data
//    $response = Response::make($img);
//
//    // set content-type
//    $response->header('Content-Type', 'image/png');
//
//    // output
//    return $response;
//});

Route::get('/', 'HomeController@index');
Route::get('about', 'PagesController@about');
Route::get('contact','PagesController@contact');

Route::resource('articles', 'ArticlesController');
Route::resource('photos', 'PhotosController');
Route::get('/photos/all', function()
{

});
//Route::post('/',[
//    'as' => 'postImage',
//    'uses' => 'HomeController@store'
//]);
Route::get('tags/{tags}', 'TagsController@show');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
