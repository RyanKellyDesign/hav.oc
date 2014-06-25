<?php 

require_once '../libraries/database.lib.php';
require_once '../models/category.collection.php';
require_once '../libraries/form.class.php';
require_once '../models/product.collection.php';
require_once '../libraries/login.class.php';
require_once '../libraries/model.lib.php';
require_once '../libraries/cart.lib.php';

Login::kickout();

$form = new Form();
$title = 'Edit Category';
$category = new Model("tb_categories");
$category->load($_GET['id']);

if($_POST){
	$category->name = $_POST['name'];
	$category->save();
}


include '../views/admin_header.php';
include '../views/admin_nav.php';
include '../views/category_form.php';
include '../views/footer.php';?>

