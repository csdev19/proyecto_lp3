<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

include '../app/helper/untils.php';

class initialController extends Controller
{
    function registrarUsuario(Request $req){    
       // Conectar con el servidor de base de datos

        $isValidate = isNullEmpty($req->user) ?: isNullEmpty($req->password) ?: isNullEmpty($req->nom_user) ?: isNullEmpty($req->ape_user)  ;

        if($isValidate){
            return $isValidate;
        }
        
        $isValidate = validateConsuta(
            "SELECT TRUE AS result
               FROM usuario
              WHERE usuario = '{$req->user}'"
        );
        echo $isValidate; 
        if($isValidate == true){
            $object = (object) [
                'status' => $_SESSION["STATUS_CONTROL"],
                'msj'    => "El usuario ya se encuentre registrado."
            ];
            return json_encode($object);
        }
        $idRol = $req->id_rol ?: 3;
        echo"55555555555555555" .$idRol;
        return mySQLInsert("INSERT INTO usuario (usuario,contraseña,nomb_usuario,ape_usuario,_id_rol) 
        VALUES ('{$req->user}','{$req->password}','{$req->nom_user}','{$req->ape_user}',$idRol )");
    }
    
    function getLogin(Request $req){
        $isValidate = isNullEmpty($req->user) ?: isNullEmpty($req->password);
        if($isValidate){
            return $isValidate;
        }
        
        return mySQLConsulta("SELECT * FROM usuario WHERE usuario ='{$req->user}' AND contraseña='{$req->password}'");
    }

    function getUsers(){
        return mySQLConsulta("select * from usuario");
    }
    
}
