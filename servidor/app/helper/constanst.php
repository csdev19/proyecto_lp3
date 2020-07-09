<?php
session_start();
ob_start();


//VALUES OF CONECTION
$_SESSION["ROOT"]         = "root";      //USER DE MYSQL
$_SESSION["PASSWORD"]     = "root";      //PASSWORD DE MYSQL 
$_SESSION["SERVIDOR"]     = "localhost"; //SERVIDOR 
$_SESSION["DATA_BASE"]    = "pruebita";  //NOMBRE DE LA BASE DE DATOS 

//STATUS DE PETICIONES
$_SESSION["STATUS_SUCCES"]  = "0";
$_SESSION["STATUS_CONTROL"] = "1";
$_SESSION["STATUS_ERROR"]   = "2";

//MESSAGES RESULT 
$_SESSION["MSJ_ERROR"] = "Hubo un error.";

//
$_SESSION["OBJ_ERROR"] = JSON_ENCODE(
            (object) [
                'status' => $_SESSION["STATUS_ERROR"],
                'msj'    => $_SESSION["MSJ_ERROR"]
             ]
            );