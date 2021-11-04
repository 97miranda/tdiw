<?php


$accio = $_GET['action'];

switch ($action)
{
	case 'lista-categorias':
		include __DIR__.'/category_list_resource.php';
		break;
	
	case 'products':
		include __DIR__.'/product_resource.php';
		break;
	default:
		include __DIR__.'/home_resource.php';
		break;
}