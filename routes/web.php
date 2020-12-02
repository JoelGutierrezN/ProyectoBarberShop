<?php

Route::get('/', 'ControladorRutas@index');
Route::get('/citas', 'BDController@citas')->middleware('auth');
Route::get('/contacto', 'ControladorRutas@contacto');
Route::get('/login', 'ControladorRutas@login'); 
Route::get('/servicios', 'ControladorRutas@servicios');  
Route::get('/agendar_cita', 'ControladorRutas@agendar_cita')->middleware('auth');
Route::get('/agregar_direccion', 'ControladorRutas@agregar_direccion')->middleware('auth');
Route::get('/direcciones', 'ControladorRutas@direcciones')->middleware('auth');    

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
