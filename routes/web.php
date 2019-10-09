<?php

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


// Route::get('nombre/{nombre}', function ($nombre) {
//     return ('usuario es: ".$nombre.php');
// });


Auth::routes();

Route::view('/','welcome');

Route::resource('users','UserController');
Route::get('/users-eliminar/{id}', 'UserController@destroydos')->name('users.eliminar');

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('cargo/{variable?}', function ($variable=false) {
//     return ("usuario es: ".$variable);

// });

Route::resource('cargos','CargoController');
Route::resource('periodos','PeriodoController');






