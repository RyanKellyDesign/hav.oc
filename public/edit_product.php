<?php 

require_once '../libraries/database.lib.php';
require_once '../models/category.collection.php';
require_once '../libraries/form.class.php';
require_once '../models/product.collection.php';
require_once '../libraries/login.class.php';
require_once '../libraries/model.lib.php';

Login::kickout();



$form = new Form();
$title = 'Edit Product';
$product = new Model($_GET['id']);

if($_POST){
	$product->name = $_POST['name'];
	$product->description = $_POST['description'];
	$product->price = $_POST['price'];
	$product->image = $_POST['image'];
	$product->category_id = $_GET['category_id'];
	$product->save();
}

include '../views/admin_header.php';
include '../views/admin_nav.php';
include '../views/product_form.php';
include '../views/footer.php';
