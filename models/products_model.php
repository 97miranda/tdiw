<?php

    class Products_model{

        private $db;

        private $products;

        public function __construct(){

            require_once("connectDB.php");
        }

        public function get_products(){

                $consulta=$this->db->query("SELECT * FROM PRODUCTOS");

                while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
                    $this->products[]=$filas;
                }

                return $this->products;
    
        }
    }

    