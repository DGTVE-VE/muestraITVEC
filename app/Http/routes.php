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

Route::get('/', 'UseController@welcome');

Route::post('save', 'UseController@save');


//Se cambio al controlador para poder acceder al la base de datos
// Route::get('/', function () {
//     return view('welcome')
// });
