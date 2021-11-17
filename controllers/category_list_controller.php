<?php

require_once __DIR__.'/../models/connectDB.php';
require_once __DIR__.'/../models/category_list_model.php';

$categorias = get_categories();

include __DIR__.'/../views/category_list_view.php';