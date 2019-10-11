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

# publicas
Route::view('/','welcome');


# privadas


Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');

Route::resource('users','UserController')->middleware('auth');
Route::get('/users-eliminar/{id}', 'UserController@destroydos')
	->middleware('auth')
	->name('users.eliminar');

Route::resource('cargos','CargoController')->middleware('auth');
Route::resource('periodos','PeriodoController')->middleware('auth');
Route::resource('areas','AreaController')->middleware('auth');
