<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

//Rutas de configuracion usuarios

Route::get('usuarios', 'UserController@index')->name('usuarios.index');

Route::get('usuarios/crear', 'UserController@create')->name('usuarios.create');

Route::post('usuarios/crear', 'UserController@store')->name('usuarios.store');

Route::get('usuarios/mostrar/{id}', 'UserController@edit')->name('usuarios.edit');

//Rutas de configuracion de roles

Route::get('roles', 'RolController@index')->name('roles.index');

Route::post('roles', 'RolController@store')->name('roles.store');

Route::get('roles/mostrar/{id}', 'RolController@show')->name('roles.show');

Route::put('roles/mostrar/{id}', 'RolController@update')->name('roles.update');

//Route::get('roles')



//RUTA DE LAS CADENAS HOTELERAS

Route::get('cadena','CadenaController@vista')->name('catalogoHoteles.cadena');

Route::post('guardarCadena','CadenaController@guardar')->name('guardarCadena');

Route::delete('eliminarCadena/{id}','CadenaController@eliminar')->name('eliminarCadena');

Route::get('editarCadena/{id}','CadenaController@editar')->name('catalogoHoteles.editarCadena');

Route::put('actualizarCadena/{id}','CadenaController@actualizar')->name('actualizarCadena');


//RUTA DE HOTELES

Route::get('hoteles','HotelController@vista')->name('catalogoHoteles.hoteles');

Route::post('guardarHotel','HotelController@guardarHotel')->name('guardarHotel');

Route::get('editarHoteles/{id}','HotelController@editarHotel')->name('catalogoHoteles.editarHoteles');

Route::put('actualizarHotel/{id}','HotelController@actualizarHotel')->name('actualizarHotel');

Route::delete('eliminarHotel/{id}','HotelController@eliminarHotel')->name('eliminarHotel');

//RUTA DE LOCACIONES

Route::get('locaciones','LocationController@vista')->name('catalogoHoteles.locaciones');

Route::post('guardarLocacion','LocationControl@guardarLocacion')->name('guardarLocacion');