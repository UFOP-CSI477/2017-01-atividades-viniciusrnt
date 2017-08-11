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
    return view('inicio');
});

Route::resource('/analiseslab','ProcedureController', ['parameters' => ['analiseslab' => 'procedimento']]);

Route::resource('/analiseslab/test','TestController');

Route::resource('/user','UserController');

Route::get('/areaadmin', function() {
  return view('areaadmin.inicio');
});

Route::get('/areacliente', function() {
  return view('areacliente.inicio');
});

Route::get('/areaoperador', function() {
  return view('areaoperador.inicio');
});

Route::get('/areaadmin/editlist', 'ProcedureController@editList');

Route::get('/areaadmin/listaexames', 'TestController@listarexamesusers');

Route::get('/areaadmin/listausuarios', 'UserController@tipolist');

Route::get('/areacliente/listaexames', 'TestController@listarexames');

Route::get('/areacliente/listadltexames', 'TestController@listaexcluirexames');

Route::get('/areacliente/listaedtexames', 'TestController@listaeditarexames');

Route::get('/areaadmin/deletelist', 'ProcedureController@deleteList');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
