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

//ProductosController
Route::apiResource('getListarProductoIdCategoria/{req?}', 'ProductosController@getListarProductoIdCategoria');
Route::apiResource('getListarProducto'                  , 'ProductosController@getListarProducto');
Route::apiResource('getProductoSelect/{req?}'           , 'ProductosController@getProductoSelect');
Route::apiResource('productos', 'ProductosController');

