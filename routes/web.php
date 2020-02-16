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
URL::forceScheme('https');
Route::get('/', function () {
    return redirect()->route('cursos.index');
});


//rutas para los cursos
Route::resource('cursos','CursoController');
//Route::resource('empleados','EmpleadoController');


//rutas para las empresas
//Route::resource('empresas','EmpresaController');





//rutas para los empleados
// Route::get('empresas/{empresa}/empleados','EmpleadoController@index');
// Route::post('empresas/{empresa}/empleados','EmpleadoController@store');
// Route::get('empleados/{nota}/edit','EmpleadoController@edit');
//Route::resource('empleados','EmpleadoController');


//ritas para las notas
Route::get('cursos/{curso}/notas','NotaController@create');
Route::post('cursos/{curso}/notas','NotaController@store');
Route::get('notas/{nota}/edit','NotaController@edit');
Route::resource('notas','NotaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware(['auth'])->group(function () {
	//Roles
	Route::post('roles/store', 'RoleController@store')->name('roles.store')
		->middleware('permission:roles.create');
	Route::get('roles', 'RoleController@index')->name('roles.index')
		->middleware('permission:roles.index');
	Route::get('roles/create', 'RoleController@create')->name('roles.create')
		->middleware('permission:roles.create');
	Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
		->middleware('permission:roles.edit');
	Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
		->middleware('permission:roles.show');
	Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
		->middleware('permission:roles.destroy');
	Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
		->middleware('permission:roles.edit');
	//Users
	Route::get('users', 'UserController@index')->name('users.index')
		->middleware('permission:users.index');
	Route::put('users/{user}', 'UserController@update')->name('users.update')
		->middleware('permission:users.edit');
	Route::get('users/{user}', 'UserController@show')->name('users.show')
		->middleware('permission:users.show');
	Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
		->middleware('permission:users.destroy');
	Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
		->middleware('permission:users.edit');

		//empresas

		//empresas
		Route::post('empresas/store', 'EmpresaController@store')->name('empresas.store')
		->middleware('permission:empresas.create');
	Route::get('empresas', 'EmpresaController@index')->name('empresas.index')
		->middleware('permission:empresas.index');
	Route::get('empresas/create', 'EmpresaController@create')->name('empresas.create')
		->middleware('permission:empresas.create');
	Route::put('empresas/{empresa}', 'EmpresaController@update')->name('empresas.update')
		->middleware('permission:empresas.edit');
	Route::get('empresas/{empresa}', 'EmpresaController@show')->name('empresas.show')
		->middleware('permission:empresas.show');
	Route::delete('empresas/{empresa}', 'EmpresaController@destroy')->name('empresas.destroy')
		->middleware('permission:empresas.destroy');
	Route::get('empresas/{empresa}/edit', 'EmpresaController@edit')->name('empresas.edit')
		->middleware('permission:empresas.edit');

		//empleados
		Route::get('empresas/{empresa}/empleados','EmpleadoController@index')->name('empleados.index')
		->middleware('permission:empleados.index');
		Route::post('empresas/{empresa}/empleados','EmpleadoController@store')->name('empleados.store')
		->middleware('permission:empleados.create');
		Route::get('empleados/{nota}/edit','EmpleadoController@edit')->name('empleados.edit')
		->middleware('permission:empleados.edit');

		Route::resource('empleados','EmpleadoController');


		
//ritas para notas
Route::get('cursos/{curso}/notas','NotaController@create')->name('notas.index')
->middleware('permission:notas.create');
Route::post('cursos/{curso}/notas','NotaController@store');
Route::get('notas/{nota}/edit','NotaController@edit');
Route::resource('notas','NotaController');



//cursos
Route::post('cursos/store', 'CursoController@store')->name('cursos.store')
->middleware('permission:cursos.create');
Route::get('cursos', 'CursoController@index')->name('cursos.index')
->middleware('permission:cursos.index');
Route::get('cursos/create', 'CursoController@create')->name('cursos.create')
->middleware('permission:cursos.create');
Route::put('cursos/{curso}', 'CursoController@update')->name('cursos.update')
->middleware('permission:cursos.edit');
Route::get('cursos/{curso}', 'CursoController@show')->name('cursos.show')
->middleware('permission:cursos.show');
Route::delete('cursos/{curso}', 'CursoController@destroy')->name('cursos.destroy')
->middleware('permission:cursos.destroy');
Route::get('cursos/{curso}/edit', 'CursoController@edit')->name('cursos.edit')
->middleware('permission:cursos.edit');

//cliente

Route::get('cursos/{curso}/clientes', 'ClientController@show')->name('notas.show')
->middleware('permission:notas.show');
	
//excel
Route::get('clientes/export/{curso}', 'ClientController@export')->name('excel.show')->middleware('permission:notas.show');

});






