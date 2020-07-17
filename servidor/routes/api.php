<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//initialController
Route::get('getLogin'        , 'initialController@getLogin');
Route::post('registrarUsuario', 'initialController@registrarUsuario');

//ProductosController
Route::get('getListarProductoIdCategoria', 'ProductosController@getListarProductoIdCategoria');
Route::get('getListarProducto'           , 'ProductosController@getListarProducto');
Route::get('getProductoSelect'           , 'ProductosController@getProductoSelect');


// getLogin -> user, password
// registrarUsuario -> user, password, nom_user,ape_user
// getListarProductoIdCategoria -> id_categoria
// getProductoSelect -> id_producto
