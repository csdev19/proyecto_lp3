<?php

namespace App\Http\Controllers;

use App\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    // public function index()
    // {
    //         // Conectar con el servidor de base de datos
    //         $conexion = mysqli_connect ("localhost", "root", "")
    //         or die ("No se puede conectar con el servidor");
    //         // Seleccionar base de datos
    //         mysqli_select_db ($conexion,"laravel_prueba")
    //             or die ("No se puede seleccionar la base de datos");
    //         $instruccion    = "SELECT * FROM carros";
    //         $consulta = mysqli_query ( $conexion,$instruccion)
    //         or die ("Fallo en la consulta");
    //         $tempArray = array();
    //         $myArray = array();
    //         while ($row = $consulta->fetch_object()) {
    //             $tempArray = $row;
    //             array_push($myArray, $tempArray);
    //         }
    //         $nuevo = json_encode($myArray);
    //         return $nuevo;
    // }

    // public function store(Request $request)
    // {
    //     $producto = Productos::create($request->all());
    //     return $producto;
    // }


    function getListarProductoIdCategoria($req){
        if (empty($req)){
            return $OBJ_ERROR;
        } 
        return mySQLConsulta(" select * from producto where id_categoria = {$req->id_categoria}");
    }
    
    function getListarProducto(){
        echo 'holaaaaaaaaaa';
        return mySQLConsulta("select * from producto");
    }
    
    function getProductoSelect($req){
        if (empty($req)){
            return $OBJ_ERROR;
        } 
        return mySQLConsulta("select * from producto where id_producto={$req->id_producto}");
    }

}
