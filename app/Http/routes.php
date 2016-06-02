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

Route::auth();

Route::get('/', 'HomeController@index');

Route::post('save', 'UseController@save');

Route::any('registro', 'UseController@registro');

Route::get('viewMail/activaCorreo/{correo}/{hash}', 'Auth\AuthController@activaCorreo');

Route::get('viewMail/correoValidado', 'Auth\AuthController@activado');

Route::get('enviamail', 'UseController@enviamail');

//Se cambio al controlador para poder acceder al la base de datos
// Route::get('/', function () {
//     return view('welcome')
// });



// Route::get('/home', 'HomeController@index');
