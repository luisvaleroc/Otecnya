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
Route::resource('cursos','CursoController');
//Route::resource('empleados','EmpleadoController');
Route::get('empresas/{empresa}/empleados','EmpleadoController@index');
Route::resource('empresas','EmpresaController');
Route::post('empresas/{empresa}/empleados','EmpleadoController@store');


//Route::resource('notas','NotaController');
//Route::resource('notas','NotaController');
Route::get('cursos/{curso}/notas','NotaController@create');
Route::post('cursos/{curso}/notas','NotaController@store');
Route::get('notas/{nota}/edit','NotaController@edit');

Route::resource('notas','NotaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
