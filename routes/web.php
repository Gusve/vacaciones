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



Route::get('nombre/{nombre}', function ($nombre) {
    return ('usuario es: ".$nombre.php');

});



Auth::routes();

Route::resource('users','UserController');
Route::get('/users-eliminar/{id}', 'UserController@destroydos')->name('users.eliminar');
Route::view('/','welcome');
Route::get('/home', 'HomeController@index')->name('home');


