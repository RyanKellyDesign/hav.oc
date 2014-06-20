<?php 

require_once '../libraries/database.lib.php';
require_once '../libraries/model.lib.php';
require_once '../libraries/login.class.php';

Login::kickout();

if($_GET['id']){
	$category = new Model($_GET['id']);
	$category->delete();
}

header('location: admin.php');
exit;