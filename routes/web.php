<?php

Route::get('/', 'ControladorRutas@index');
Route::get('/citas/{id}', 'BDController@citas')->middleware('auth');
Route::get('/contacto', 'ControladorRutas@contacto');
Route::get('/login', 'ControladorRutas@login'); 
Route::get('/servicios', 'ControladorRutas@servicios');  
Route::get('/agendar_cita/{id}', 'ControladorRutas@agendar_cita')->middleware('auth');
Route::get('/insertar_cita', 'BDController@insertar_cita')->middleware('auth');
Route::get('/agregar_direccion', 'ControladorRutas@agregar_direccion')->middleware('auth');
Route::get('/direcciones/{id}', 'ControladorRutas@direcciones')->middleware('auth');  
Route::get('/perfil', 'ControladorRutas@perfil')->middleware('auth');
Route::get('/actualizar_perfil', 'BDController@actualizarperfil')->middleware('auth');
Route::get('/municipios/{estado_id}', 'BDController@municipios')->middleware('auth');       

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
