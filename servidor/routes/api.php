<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



//initialController
Route::get('getLogin/{req?}'        , 'initialController@getLogin');
Route::get('registrarUsuario/{req?}', 'initialController@registrarUsuario');
Route::get('getUsers'               , 'initialController@getUsers');

//ProductosController
Route::get('getListarProductoIdCategoria/{req?}', 'ProductosController@getListarProductoIdCategoria');
Route::get('getListarProducto'                  , 'ProductosController@getListarProducto');
Route::get('getProductoSelect/{req?}'           , 'ProductosController@getProductoSelect');
// Route::get('productos', 'ProductosController');

