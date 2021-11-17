<?php

 class connect{

    public static function conexion(){

        try{

            $conexion = new PDO("mysql:host=127.0.0.1;dbname=tdiw;port=3305", 'root','');

            echo "conexión realizada";
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $conexion->exec("SET CHARACTER SET UTF8");
        }catch(Exception $e){

            die("Error" . $e->getMessage());

            echo "Línea del error" . $e->getLine();
        }
        return $conexion;
    }

}
 ?>