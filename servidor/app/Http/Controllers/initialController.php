<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
include 'constanst.php';
include 'untils.php';

class initialController extends Controller
{
    function registrarUsuario($req){    
       // Conectar con el servidor de base de datos
        try {
            $conexion = mysqli_connect ($SERVIDOR, $ROOT, $PASSWORD)
            or die ("No se puede conectar con el servidor");
        
            mysqli_select_db ($conexion, "laravel_prueba")
                or die ("No se puede seleccionar la base de datos");
            
            $consulta = mysqli_query ( 
                $conexion,
                "insert into usuario (usuario,contraseña,nomb_usuario,ape_usuario) 
                values ({$req->user},{$req->password},{$req->nom_user},{$req->ape_user} )");
            
            if(!$consulta){
                $object = (object) [
                    'usuario'      => $req->user,
                    'contraseña'   => $req->password,
                    'nomb_usuario' => $req->nom_user,
                    'ape_usuario'  => $req->ape_user
                ];
                return json_encode($consulta);

            } else {
                echo "Fallo en la consulta: " . $sql . "<br>" . mysqli_error($conexion);
                return $OBJ_ERROR;
            }
            mysqli_close ($conexion);     
        }  catch (Exception $e) {
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
            return $OBJ_ERROR;
        }
                
    }
    
    function getLogin($req){
        if (empty($req)){
            return $OBJ_ERROR;
        } 
        return mySQLConsulta("select * from usuario where usuario = {$req->user} and contraseña={$req->password}");
    }

}
