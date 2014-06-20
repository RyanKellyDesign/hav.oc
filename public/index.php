<?php 

require_once '../libraries/database.lib.php';
require_once '../libraries/model.lib.php';
require_once '../models/category.collection.php';
require_once '../models/product.collection.php';
require_once '../libraries/login.class.php';

session_start();
if($_SESSION['intro_seen'] == 1) {
	include '../views/header.php';
	include '../views/nav.php';
	include '../views/home_page.php';
}
else {
	$_SESSION['intro_seen'] = 1;
	header('location:../intro.php');
	exit;
}
