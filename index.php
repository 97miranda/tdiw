<?php
require_once __DIR__ . '/config.php';

session_start();

$request = isset($_GET['action']) ? $_GET['action'] : null;

switch ($request) {
    case 'product_list' :
        require __DIR__ . '/resources/product_list_resource.php';
        break;
    default:
        require __DIR__ . '/resources/home_resource.php';
        break;
}