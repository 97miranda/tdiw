<?php

$databaseName = 'practica';
$databaseUser = 'root'; 
$databasePassword = '';
$databaseHost = '8.8.8.9';

 class Conectar{

    public static function conexion(){

        try{

            $conexion = new PDO('mysql:host=localhost; dbname=practica', 'root','');

            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $conexion->exec("SET CHARACTER SET UTF8");
        }catch(Exception $e){

            die("Error" . $e->getMessage());

            echo "Línea del error" . $e->getLine();
        }
    }
 }