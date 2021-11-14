<?php

   require_once("models/products_model.php");

   $products= new Products_model();

   $matrizProducts = $products->get_products();

   require_once("views/products_view.php");
 

 ?>