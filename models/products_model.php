<?php

    class Products_model{

        private $db;

        private $products;

        public function __construct(){

            require_once("models/connectDB.php");

            $this->db=connect::conexion();

            $this->products=array();
        }

        public function get_products(){

                $consult=$this->db->query("SELECT * FROM productos");

                while($filas=$consult->fetch(PDO::FETCH_ASSOC)){
                    $this->products[]=$filas;
                }

                return $this->products;
    
        }
    }

?>    