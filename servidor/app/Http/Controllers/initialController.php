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
        
        return mySQLInsert("INSERT INTO usuario (usuario,contraseña,nomb_usuario,ape_usuario) 
        VALUES ('{$req->user}','{$req->password}','{$req->nom_user}','{$req->ape_user}' )");
    }
    
    function getLogin(Request $req){
        $isValidate = isNullEmpty($req->user) ?: isNullEmpty($req->password);
        if($isValidate){
            return $isValidate;
        }
        
        return mySQLConsulta("SELECT * FROM usuario WHERE usuario ='{$req->user}' AND contraseña='{$req->password}'");
    }

}
