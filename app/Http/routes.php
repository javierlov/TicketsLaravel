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

require __DIR__ . '/Routes/public.php';

Route::group(['prefix' => 'password'], function() {
     require __DIR__ . '/Routes/website.php';    
});

Route::group(['middleware' => 'auth'], function () {
     require __DIR__ . '/Routes/auth.php';    
});
Route::auth();

Route::get('/home', 'HomeController@index');
