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
Route::get('/', 'TestController@index')->name('inicio');

  Auth::routes();
  Route::middleware(['auth',])->group(function () {

  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('user-autocomplete', 'UserController@autocomplete');

  Route::resource('user', 'UserController');
  Route::resource('logins', 'LoginController');
  Route::resource('permission', 'PermissionController');
  Route::resource('roles', 'RolesController');

  /*********************************************************/
  /******************Modulo de administracion**************/
  /*******************************************************/
   Route::resource('encabezado', 'CabeceraController');
   Route::resource('somos', 'SomosController');
   Route::resource('somosCuadros', 'SomosCuadrosController');
   Route::resource('proyectos', 'ProyectoController');
   Route::resource('proyectosCuadros', 'GrupoProyectosController');
   Route::resource('planes', 'PlanesController');
   Route::resource('planesCuadros', 'GrupoPlanesController');
   Route::resource('cursos', 'CursosController');
   Route::resource('equipo', 'EquipoController');
   Route::resource('desgloce', 'DesgloceEquipoController');

 /*******************************************************/
/*******************************************************/


});
