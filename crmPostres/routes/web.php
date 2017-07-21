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
    return view('master');
});


Route::get('/registrarClientes', 'clientesController@registrar');
Route::post('/guardarCliente','clientesController@guardar');
Route::get('/consultarClientes','clientesController@consultar');
Route::get('/editarClientes/{id}','clientesController@editar');
Route::post('/actualizarCliente/{id}','clientesController@actualizar');
Route::get('/eliminarCliente/{id}','clientesController@eliminar');


Route::get('/administrador', 'administradorController@ingresar');


Route::get('/registraPromociones', 'promocionesController@ingresar');
Route::post('/guardaPromociones','promocionesController@guardar');
Route::get('/consultaPromociones', 'promocionesController@consultar');
Route::get('/editarPromociones/{id}','promocionesController@editar');
Route::post('/actualizarPromociones/{id}','promocionesController@actualizar');
Route::get('/eliminarPromociones/{id}','promocionesController@eliminar');
Route::get('/enviaPromociones/{id}','promocionesController@enviarPromo');
Route::get('/promociones','promocionesController@enviar');

Route::get('/buscarClientes','promocionesController@buscarClientes');

Route::post('/enviarPromociones', 'promocionesController@enviarPromociones');









