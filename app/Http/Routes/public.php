<?php

Route::get('/', function () { return view('welcome'); });

Route::get('login', ['uses' => 'Auth\AuthController@getLogin', 'as'=>'login']);
Route::post('login', 'Auth\AuthController@postLogin');

Route::get('logout', ['uses' => 'Auth\AuthController@getLogout', 'as'=>'logout']);
//Route::get('logout', 'Auth\AuthController@getLogin' );

Route::get('register', ['uses' => 'Auth\AuthController@getRegister', 'as'=>'register']);
Route::post('register', 'Auth\AuthController@postRegister');
