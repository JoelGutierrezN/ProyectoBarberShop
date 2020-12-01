<?php

Route::get('/', 'ControladorRutas@index');
Route::get('/citas', 'BDController@citas');
Route::get('/contacto', 'ControladorRutas@contacto');
Route::get('/login', 'ControladorRutas@login'); 
Route::get('/servicios', 'ControladorRutas@servicios');  
Route::get('/agendar_cita', 'ControladorRutas@agendar_cita');  

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
