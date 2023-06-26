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

Route::get('/saludo', function () {
    return view('Tabla_del_dos');
});


Route::get('/obra_social', "App\Http\Controllers\ObraSocialController@index");
Route::get('/obra_social/nuevo', "App\Http\Controllers\ObraSocialController@nuevo");
Route::post('/obra_social/persistir', "App\Http\Controllers\ObraSocialController@persistir");
Route::get('/obra_social/editar/{id}', "App\Http\Controllers\ObraSocialController@editar");
Route::post('/obra_social/guardar_cambios', "App\Http\Controllers\ObraSocialController@guardar_cambios");
Route::get('/obra_social/eliminar/{id}', "App\Http\Controllers\ObraSocialController@eliminar");


Route::get('/pacientes', "App\Http\Controllers\PacienteController@index");