<?php

//http://localhost/mis_archivos/Ckeditor_git/ckeditor_laravel/public/

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

Route::get('formulario', 'misControladores\FormularioController@mostrarFormulario');
Route::post('formulario', 'misControladores\FormularioController@mostrarTexto');
