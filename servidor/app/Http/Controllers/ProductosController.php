<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

include '../app/helper/untils.php';

class ProductosController extends Controller
{
    function getListarProductoIdCategoria(Request $req){
        $isValidate = isNullEmpty($req->id_categoria, 'id_categoria');
        if($isValidate){
            return $isValidate;
        }
        return mySQLConsulta("SELECT * FROM producto WHERE id_categoria = '{$req->id_categoria}'");
    }
    
    function getListarProducto(){
    
        return  mySQLConsulta("SELECT * FROM producto");
    }
    
    function getProductoSelect(Request $req){
        $isValidate = isNullEmpty($req->id_producto,'id_producto');
        if($isValidate){
            return $isValidate;
        }
        return mySQLConsulta("SELECT * FROM producto WHERE id_producto = {$req->id_producto}");
    }

}
