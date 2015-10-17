<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//    
//});

Route::get('/', 'Login@logar');
Route::get('notas', 'notas@notasListar');
Route::get('login', 'Login@logar');
Route::get('galeria', 'Galeria@acessarGaleria');
Route::get('principal', 'Principal@acessarPrincipal');
