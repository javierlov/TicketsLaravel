<?php

Route::get('ticket', 'TicketController@index');
Route::get('ticket/crear', 'TicketController@create');
Route::post('ticket/crear', 'TicketController@store');
Route::get('ticket/{nota}', 'TicketController@show')->where('nota','[0-9]+');

// Route::get('usuario', 'UsuarioController@index');
Route::resource('usuario', 'UsuarioController');
Route::resource('log', 'LoginController');
Route::get('/home', 'HomeController@index');

Route::get('dashboard', ['middleware' => 'country:Argentina', function(){
    return '<h1>Bienvenido!! Estas en Argentina</h1>';
}]);
