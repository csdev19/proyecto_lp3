<?php

include '../app/helper/constanst.php';

    function mySQLConsulta(String $sql) {
        
        try {
            $conexion = mysqli_connect ($_SESSION["SERVIDOR"] , $_SESSION["ROOT"], $_SESSION["PASSWORD"])
                or die ("No se puede conectar con el servidor");
        
            mysqli_select_db ($conexion, $_SESSION["DATA_BASE"])
                or die ("No se puede seleccionar la base de datos");
            
            $consulta = mysqli_query ( $conexion,$sql);
            
            if($consulta){
                $tempArray = array();
                $myArray   = array();

                while ($row = $consulta->fetch_object()) {
                    $tempArray = $row;
                    array_push($myArray, $tempArray);
                }
                $newObject = json_encode($myArray);
                return $newObject;
            } else {
                echo "Fallo en la consulta: ".$sql."<br>".mysqli_error($conexion);
                return $_SESSION["OBJ_ERROR"];
            }
            mysqli_close ($conexion);     
        }  catch (Exception $e) {
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
            return $_SESSION["OBJ_ERROR"];
        }

    }

   function mySQLInsert($sql) {      
        // Conectar con el servidor de base de datos
        try {
            $conexion = mysqli_connect ($_SESSION["SERVIDOR"], $_SESSION["ROOT"], $_SESSION["PASSWORD"])
            or die ("No se puede conectar con el servidor");
        
            mysqli_select_db ($conexion, $_SESSION["DATA_BASE"])
                or die ("No se puede seleccionar la base de datos");
            
            $consulta = mysqli_query ( $conexion,$sql);
            
            if(!$consulta){
                $object = (object) [
                    'status' => $_SESSION["STATUS_SUCCES"],
                    'msj'    => "Se registro con exito."
                ];
                return json_encode($consulta);

            } else {
                echo "Fallo en la consulta: " . $sql . "<br>" . mysqli_error($conexion);
                return $_SESSION["OBJ_ERROR"];
            }
            mysqli_close ($conexion);     
        }  catch (Exception $e) {
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
            return $_SESSION["OBJ_ERROR"];
        }
        
    }