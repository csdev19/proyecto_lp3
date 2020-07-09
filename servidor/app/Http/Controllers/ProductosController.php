<?php


namespace App\Http\Controllers;

use App\Productos;
use Illuminate\Http\Request;

include '../app/helper/untils.php';

class ProductosController extends Controller
{
    function getListarProductoIdCategoria($req){
        if (empty($req)){
            return $OBJ_ERROR;
        } 
        return mySQLConsulta(" select * from producto where id_categoria = {$req->id_categoria}");
    }
    
    function getListarProducto(){
    
        return  mySQLConsulta("select * from producto");
    }
    
    function getProductoSelect($req){
        if (empty($req)){
            return $OBJ_ERROR;
        } 
        return mySQLConsulta("select * from producto where id_producto={$req->id_producto}");
    }

}
