<?php

    function mySQLInsert(String $sql) {      
        // Conectar con el servidor de base de datos
        try {
            $conexion = mysqli_connect ($SERVIDOR, $ROOT, $PASSWORD)
            or die ("No se puede conectar con el servidor");
        
            mysqli_select_db ($conexion, "laravel_prueba")
                or die ("No se puede seleccionar la base de datos");
            
            $consulta = mysqli_query ( $conexion,$sql);
            
            if(!$consulta){
                $object = (object) [
                    'nombre' => $nombre
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

    function mySQLConsulta(String $sql) {
        try {
            $conexion = mysqli_connect ($SERVIDOR , $ROOT, $PASSWORD)
                or die ("No se puede conectar con el servidor");
        
            mysqli_select_db ($conexion, $DATA_BASE)
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
                return $OBJ_ERROR;
            }
            mysqli_close ($conexion);     
        }  catch (Exception $e) {
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
            return $OBJ_ERROR;
        }

    }

