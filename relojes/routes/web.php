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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/diseno', function () {
    return view('diseno');
})->name('diseno');

Route::get('/diseno/compartir', 'DisenoController@getModeloURL')->name('diseno');

Route::get('/readme', function () {
    return view('readme');
});

Route::get('/parte/create', 'AddController@create');
Route::post('/parte', 'AddController@store');

Route::get('/partes/jsonPartes', 'PartesController@jsonPartes');
Route::get('/partes/jsonVacio', 'PartesController@jsonVacio');
Route::get('/partes/jsonPreestablecidos', 'PartesController@jsonPreestablecidos');
Route::get('/partes/jsonUsuarioPreestablecidos', 'PartesController@jsonUsuarioPreestablecidos');

Route::post('/preestablecido/guardarPreestablecido', 'PreestablecidoController@guardarPreestablecido');
Route::post('/preestablecido/eliminarPreestablecido', 'PreestablecidoController@eliminarPreestablecido');

Route::get('/user/loggedin', 'UsuarioController@isLoggedin');

// OAuth Routes
Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

//Route::get('login/github', 'Auth\LoginController@redirectToProvider');
//Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');


