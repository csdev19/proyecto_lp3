<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//initialController
Route::post('registrarUsuario', 'initialController@registrarUsuario');
Route::get('getLogin'         , 'initialController@getLogin');
Route::get('getUsers'         , 'initialController@getUsers');

//ProductosController
Route::get('getListarProductoIdCategoria', 'ProductosController@getListarProductoIdCategoria');
Route::get('getListarProducto'           , 'ProductosController@getListarProducto');
Route::get('getProductoSelect'           , 'ProductosController@getProductoSelect');

//Categoria
Route::get('getCategoriaSelect', 'CategoriaContoller@getCategoriaSelect'); // CATEGORIA SELECCIONADA 
Route::get('getListCategoria'  , 'CategoriaContoller@getListCategoria');   // LISTA DE CATEGORIAS 

//Pedidos
Route::get('getprecioTotal'    , 'PedidoContoller@getprecioTotal'); // CATEGORIA SELECCIONADA 
Route::get('getInsertProducto'  , 'PedidoContoller@getInsertProducto');   // LISTA DE CATEGORIAS 
// Route::get('getListCategoria'  , 'PedidoContoller@getListCategoria');   // LISTA DE CATEGORIAS 
// Route::get('getListCategoria'  , 'PedidoContoller@getListCategoria');   // LISTA DE CATEGORIAS 
// Route::get('getListCategoria'  , 'PedidoContoller@getListCategoria');   // LISTA DE CATEGORIAS 
// Route::get('getListCategoria'  , 'PedidoContoller@getListCategoria');   // LISTA DE CATEGORIAS 
// Route::get('getListCategoria'  , 'PedidoContoller@getListCategoria');   // LISTA DE CATEGORIAS 
// Route::get('getListCategoria'  , 'PedidoContoller@getListCategoria');   // LISTA DE CATEGORIAS 

// getLogin -> user, password
// registrarUsuario -> user, password, nom_user,ape_user
// getListarProductoIdCategoria -> id_categoria
// getProductoSelect -> id_producto
