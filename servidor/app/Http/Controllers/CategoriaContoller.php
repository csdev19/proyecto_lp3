<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

include '../app/helper/untils.php';

class CategoriaContoller extends Controller 
{

    function getListCategoria(){
        return mySQLConsulta("SELECT * FROM  categoria");
    }

    function getCategoriaSelect(Request $req){
        $isValidate = isNullEmpty($req->id_categoria,'id_categoria');
        if($isValidate){
            return $isValidate;
        }
        
        return mySQLConsulta("SELECT * FROM  categoria where id_categoria= '{$req->id_categoria}'");
    }
}
