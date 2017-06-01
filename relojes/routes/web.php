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

Route::get('/getmodelo/diseno', 'DisenoController@getModeloVacioURL');

Route::get('/getmodelo/diseno/malla/{malla}/fondo/{fondo}/marco/{marco}/agujas/{agujas}', 'DisenoController@getModeloURL');

Route::get('/diseno/malla/{malla}/fondo/{fondo}/marco/{marco}/agujas/{agujas}', function () {
    return view('diseno');
});

Route::get('/readme', function () {
    return view('readme');
});

//Edit Partes Routes
Route::get('/parte/create', 'AddController@create')->name('editar')->middleware('is_admin');
Route::post('/parte', 'AddController@store')->middleware('is_admin');
Route::post('/deleteparte', 'AddController@destroy')->middleware('is_admin');

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



