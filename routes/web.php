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

Route::get('/', function () {
    return view('landpag');
});

Route::post('tipo', 'ContactoController@tipo')->name('contacto-tipo');
Route::get('tipo', function () {
    return redirect('/');
});
Route::post('guardar', 'ContactoController@guardar')->name('contacto-guardar');
Route::get('guardar', function () {
    return redirect('/');
});