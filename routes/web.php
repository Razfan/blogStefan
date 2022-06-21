<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::view('/', 'home')->name('home');

//Rutas Usuarios
Route::view('/usuarios', 'usuarios')->name('usuarios');
Route::get('/usuarios', 'App\Http\Controllers\UsuariosController@index')->name('usuarios.index');
Route::get('/usuarios/export', 'App\Http\Controllers\UsuariosController@export')->name('usuarios.export');
Route::get('/usuarios/exportPDF', 'App\Http\Controllers\UsuariosController@exportPDF')->name('usuarios.exportPDF');
Route::get('/usuarios/create', 'App\Http\Controllers\UsuariosController@create')->name('usuarios.create');

//Rutas Entradas
Route::view('/entradas', 'entradas')->name('entradas');
Route::get('/entradas', 'App\Http\Controllers\EntradasController@index')->name('entradas.index');
Route::get('/entradas/add', 'App\Http\Controllers\EntradasController@add')->name('entradas.add');
Route::get('/entradas/show/{id?}', 'App\Http\Controllers\EntradasController@show')->name('entradas.show');
Route::get('/entradas/export', 'App\Http\Controllers\EntradasController@export')->name('entradas.export');
Route::get('/entradas/exportPDF', 'App\Http\Controllers\EntradasController@exportPDF')->name('entradas.exportPDF');
Route::post('/entradas/add', 'App\Http\Controllers\EntradasController@store')->name('entradas.store');
Route::get('/entradas/{id?}', 'App\Http\Controllers\EntradasController@delete')->name('entradas.delete');
Route::get('/entradas/edit/{id?}', 'App\Http\Controllers\EntradasController@edit')->name('entradas.edit');
Route::post('/entradas/update/{id?}', 'App\Http\Controllers\EntradasController@update')->name('entradas.update');


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
