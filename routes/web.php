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

Route::get('home', 'HomeController@index')->name('layouts.home');

Route::get('inicioSesion', 'HomeController@inicioSesion')->name('inicioSesion');


//RUTA DE LAS CADENAS HOTELERAS

Route::get('cadena','CadenaController@vista')->name('catalogoHoteles.cadena');

Route::post('guardarCadena','CadenaController@guardar')->name('guardarCadena');

Route::delete('eliminarCadena/{id}','CadenaController@eliminar')->name('eliminarCadena');

Route::get('editarCadena/{id}','CadenaController@editar')->name('catalogoHoteles.editarCadena');

Route::put('actualizarCadena/{id}','CadenaController@actualizar')->name('actualizarCadena');

Route::get('locaciones','LocationController@vista')->name('catalogoHoteles.locaciones');

//RUTA DE HOTELES

Route::get('hoteles','HotelController@vista')->name('catalogoHoteles.hoteles');

Route::post('guardarHotel','HotelController@guardarHotel')->name('guardarHotel');

Route::get('editarHoteles/{id}','HotelController@editarHotel')->name('catalogoHoteles.editarHoteles');

Route::put('actualizarHotel/{id}','HotelController@actualizarHotel')->name('actualizarHotel');

Route::delete('eliminarHotel/{id}','HotelController@eliminarHotel')->name('eliminarHotel');
