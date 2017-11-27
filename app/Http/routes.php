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
//rutas principales
Route::get('/', function(){
	return view('layouts/principal');
});

//rutas autenticacion
//Route::get('registrar', 'Auth\AuthController@getRegister');
//Route::post('registrar', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);
Route::post('registrar', ['as' => 'auth/register', 'uses' => 'usuarioController@registro']);


Route::get('login/{email}', [
		'uses' 	=> 'usuarioController@login',
		'as'	=>	'login'
]);






//ruta login registros apis
Route::get('auth_facebook', function(){ 
	return OAuth::authorize('facebook');
});
Route::get('login_facebook', 'usuarioController@facebook');

Route::get('auth_google', function(){ 
	return OAuth::authorize('google'); 
});
Route::get('oauth2callback', 'usuarioController@google');
Route::post('dashboard', [
		'uses' 	=> 'usuarioController@tipoUser',
		'as'	=>	'dashboard'
]);

Route::post('login', 'usuarioController@login');

/////////////////////////////////////////////////////////////////

Route::group(['middleware' => 'auth'], function(){
    Route::get('dashboard', [
			'uses' 	=> 'usuarioController@dashboard',
			'as'	=>	'dashboard'
	]);
	Route::get('miCuenta', [
			'uses' 	=> 'usuarioController@editarCuenta',
			'as'	=>	'miCuenta'
	]);

	Route::post('editUser', 'usuarioController@editUser');

	//////////////////////////////////////////////////////////////////
	Route::get('especialistas', [
			'uses' 	=> 'usuarioController@especialistas',
			'as'	=>	'especialistas'
	]);

	//////////////////////////////////////////////////////////

	Route::get('salir', [
			'uses' 	=> 'usuarioController@getLogout',
			'as'	=>	'salir'
	]);
});

Route::group(['middleware' => ['auth', 'especialista']], function(){

////////////////////////////////////////////////////////////////
	Route::resource('misEspecializaciones', 'EspecializacionesController');
	Route::get('misEspecializaciones/actividades/{id}', 'EspecializacionesController@actividades');

	Route::resource('misProyectos', 'ProyectosController');
	Route::resource('misProyectos/imagenes', 'ImagenesController');
	Route::get('misProyectos/imagenes/create/{id}', 'ImagenesController@create');
	Route::get('imagenes/destroy/{id}', 'ImagenesController@destroy');
	Route::post('subirimagenes', 'ImagenesController@store');

	
	Route::get('misContratos', function(){
	return view('errors.503');
	});
	Route::get('contratos', function(){
	return view('errors.503');
	});
	/*Route::get('misContratos', [
			'uses' 	=> 'usuarioController@misContratos',
			'as'	=>	'misContratos'
	]);*/
	Route::get('misCalificaciones', [
			'uses' 	=> 'usuarioController@misCalificaciones',
			'as'	=>	'misCalificaciones'
	]);
	Route::get('membresia', [
			'uses' 	=> 'usuarioController@membresia',
			'as'	=>	'membresia'
	]);
	Route::get('buscarContratos', [
			'uses' 	=> 'usuarioController@buscarContratos',
			'as'	=>	'buscarContratos'
	]);

});

/////////////////rutas generales///////////////
	Route::get('misCotizaciones', [
			'uses' 	=> 'usuarioController@misCotizaciones',
			'as'	=>	'misCotizaciones'
	]);






