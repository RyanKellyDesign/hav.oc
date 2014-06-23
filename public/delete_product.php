<?php 

require_once '../libraries/database.lib.php';
require_once '../libraries/login.class.php';
require_once '../libraries/model.lib.php';

Login::kickout();

if($_GET['id']){
	$product = new Model("tb_products");
	$product->load($_GET['id']);
	$product->delete();
}

header('location: admin.php');
exit;