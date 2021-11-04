<?php

    require_once("../model/product_model.php")

    $product=new product_model();

    $matrizProducts=$product->get_products();

    require_once("../views/product_view.php");






?>