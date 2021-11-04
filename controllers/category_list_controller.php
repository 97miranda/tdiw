<?php

require_once __DIR__.'/../model/connectDB.php';
require_once __DIR__.'/../model/category_list_model.php';

$categories = getCategories(); // llamada al modelo para obtener la lista de categorias

include __DIR__.'/../views/category_list_view.php';