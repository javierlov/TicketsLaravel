<?php

//prefix password

Route::get('email', ['uses' => 'Auth\AuthController@getEmail', 'as'=>'email']);
Route::post('email', 'Auth\AuthController@postEmail');

Route::get('reset/{token}', ['uses' => 'Auth\AuthController@getReset', 'as'=>'reset']);
Route::post('reset/', 'Auth\AuthController@postReset');