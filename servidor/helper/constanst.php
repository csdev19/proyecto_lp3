<?php
//CONSTANTS

//VALUES OF CONECTION
$ROOT         = "root";      //USER DE MYSQL
$PASSWORD     = "";    //PASSWORD DE MYSQL
$SERVIDOR     = "localhost"; //SERVIDOR
$DATA_BASE    = "tienda"; //NOMBRE DE LA BASE DE DATOS

//STATUS DE PETICIONES
$STATUS_SUCCES  = "0";
$STATUS_CONTROL = "1";
$STATUS_ERROR   = "2";

//MESSAGES RESULT
$MSJ_ERROR = "Hubo un error.";

//
$OBJ_ERROR = (object) [
                'status' => $STATUS_ERROR,
                'msj'    => $MSJ_ERROR
             ];
