<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

include '../app/helper/untils.php';

class PedidoContoller extends Controller
{
    function pagoListProducto(Request $req){

        mySQLInsert("INSERT INTO pedido_usuario (id_usuario, flg_pedido) 
        VALUES ('{$req->id_persona}','N' )");

        foreach ($req->array_produ AS $clave => $valor) {
            dd($valor);

            mySQLConsulta("CALL updatePedidoById('{$valor->id_producto}', '{$valor->cant_producto}', @total, @id_p_x_u)");
            
            echo "El valor es: {$valor->id_producto}";
        }

        return mySQLConsulta(
            "SELECT fecha_pedido,
                    precio_total_pedido,
                    'Se efectuo el pago correctamente' AS msj 
               FROM `pedido_usuario`
              ORDER BY 1 DESC 
              LIMIT 1 "
        );
    }

    function getprecioTotal(Request $req){
        return mySQLConsulta(
            "SELECT SUM(precio_total_pedido) AS total
               FROM pedido_usuario
              WHERE id_usuario = '{$req->id_user}'
                AND flg_pedido = 'N'
        ");
    }


    function insertProducto(Request $req){


        $isValidate = validateConsuta(
            "SELECT TRUE AS result
            FROM pedido_usuario AS pu,
                 pedidousuario_and_producto AS pap
           WHERE pu.id_usuario   = '{$req->id_user}'
             AND pap.id_producto = '{$req->id_producto}'
             AND pu.id_pedidoUsuario = pap.id_pedidoUsuario
             AND pu.flg_pedido   = 'N'"
        );

        if($isValidate == true){
            return mySQLConsulta("CALL updatePedidoById('{$req->id_user}', '{$req->id_producto}', '{$req->cantidad}', @total, @id_new)");
        }

        return mySQLConsulta("CALL insertarPedido('{$req->id_user}', '{$req->id_producto}', '{$req->cantidad}', @total, @id_new)");

    }

    function getCategoriaSelect(Request $req){
        $isValidate = isNullEmpty($req->id_categoria,'id_categoria');
        if($isValidate){
            return $isValidate;
        }

        return mySQLConsulta("SELECT * FROM  categoria where id_categoria= '{$req->id_categoria}'");
    }
}


