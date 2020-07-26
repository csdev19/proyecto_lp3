<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

include '../app/helper/untils.php';

class PedidoContoller extends Controller
{  
    function getprecioTotal(Request $req){
        return mySQLConsulta(
            "SELECT SUM(precio_total_pedido) AS total
               FROM pedido_usuario
              WHERE id_usuario = '{$req->id_user}' 
                AND flg_pedido = 'N'
        ");

        
    }
    function getInsertProducto(Request $req){
        $isValidate = mySQLConsulta(
            "SELECT TRUE AS result
            FROM pedido_usuario AS pu,
                 pedidousuario_and_producto AS pap
           WHERE pu.id_usuario   = '{$req->id_user}'
             AND pap.id_producto = '{$req->id_producto}'  
             AND pu.id_pedidoUsuario = pap.id_pedidoUsuario 
             AND pu.flg_pedido   = 'N'
        ");
        // $response = json_decode($isValidate);
        // $imp = json_decode($isValidate,true);
        // $imp2 = array_shift($imp[0]); //con esto accedes a la posición del array a imprimir $imp[1],$imp[2],etc...
        // print($imp2);//puedes usar print o print_r

        // echo 'LLEGO ESTOOO ::::: '.$isValidate."---------".$response->status;

    }

    function getCategoriaSelect(Request $req){
        $isValidate = isNullEmpty($req->id_categoria);
        if($isValidate){
            return $isValidate;
        }
        
        return mySQLConsulta("SELECT * FROM  categoria where id_categoria= '{$req->id_categoria}'");
    }
}
