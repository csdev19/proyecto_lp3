<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//initialController
Route::get('getLogin/{req?}'        , 'initialController@getLogin');
Route::get('registrarUsuario/{req?}', 'initialController@registrarUsuario');
Route::get('getUsers'               , 'initialController@getUsers');

//ProductosController
Route::get('getListarProductoIdCategoria', 'ProductosController@getListarProductoIdCategoria');
Route::get('getListarProducto'           , 'ProductosController@getListarProducto');
Route::get('getProductoSelect'           , 'ProductosController@getProductoSelect');


// getLogin -> user, password
// registrarUsuario -> user, password, nom_user,ape_user
// getListarProductoIdCategoria -> id_categoria
// getProductoSelect -> id_producto
