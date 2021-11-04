<?php

    class Categories_model{

        private $db;

        private $categories;

        public function __construct(){

            require_once("connectDB.php");
        }

        public function get_categories(){

                $consulta=$this->db->query("SELECT * FROM CATEGORIAS");

                while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
                    $this->categories[]=$filas;
                }

                return $this->categories;
    
        }
    }

    