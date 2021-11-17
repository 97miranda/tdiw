
<?php

       function get_categories() {

            $conexion = connect::conexion();
            $sql = "SELECT * FROM categorias";

           $stmt = $conexion->query($sql, PDO::FETCH_ASSOC);
           return $stmt->fetchAll(PDO::FETCH_ASSOC);


    
        }

    