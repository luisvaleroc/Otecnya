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


//rutas para los cursos
Route::resource('cursos','CursoController');
//Route::resource('empleados','EmpleadoController');


//rutas para las empresas
Route::resource('empresas','EmpresaController');

//rutas para los empleados
Route::get('empresas/{empresa}/empleados','EmpleadoController@index');
Route::post('empresas/{empresa}/empleados','EmpleadoController@store');
Route::get('empleados/{nota}/edit','EmpleadoController@edit');
Route::resource('empleados','EmpleadoController');


//ritas para las notas
Route::get('cursos/{curso}/notas','NotaController@create');
Route::post('cursos/{curso}/notas','NotaController@store');
Route::get('notas/{nota}/edit','NotaController@edit');
Route::resource('notas','NotaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
