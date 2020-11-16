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

Route::get('/usuarios', 'UserController@index')->name('usuarios.index');

Route::get('/roles', 'RolController@index')->name('roles.index');

Route::get('inicioSesion', 'HomeController@inicioSesion')->name('inicioSesion');


//RUTA DE LAS CADEAS HOTELERAS

Route::get('cadena','CadenaController@vista')->name('catalogoHoteles.cadena');

Route::post('guardarCadena','CadenaController@guardar')->name('guardarCadena');

Route::delete('eliminarCadena/{id}','CadenaController@eliminar')->name('eliminarCadena');
