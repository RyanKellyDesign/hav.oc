<?php 

require_once '../libraries/database.lib.php';
require_once '../libraries/model.lib.php';
require_once '../libraries/login.class.php';
require_once '../libraries/cart.lib.php';

Login::kickout();

if($_GET['id']){
	$category = new Model('tb_categories');
	$category->load($_GET['id']);
	$category->delete();
}

header('location: admin.php');
exit;