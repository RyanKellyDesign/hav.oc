<?php 

require_once '../libraries/database.lib.php';
require_once '../models/category.collection.php';
require_once '../libraries/form.class.php';
require_once '../models/product.collection.php';
require_once '../libraries/login.class.php';
require_once '../libraries/model.lib.php';
require_once '../libraries/upload.lib.php';
require_once '../libraries/cart.lib.php';

Login::kickout();
Upload::$optional = true;



$form = new Form();
$title = 'Edit Product';
$product = new Model('tb_products');

$product->load($_GET['id']);

if($_POST){
	$product->name = $_POST['name'];
	$product->description = $_POST['description'];
	$product->price = $_POST['price'];

	if($_FILES){
		$upload_result = Upload::to_folder('assets/uploads/');

		foreach($upload_result as $file){
			if($file['error_message']){
				echo '<p class="error">'.$file['error_message'].'</p>';
			}else if($file['filepath']) {
				$product->image = $file['filepath'];	
			}
			
		}
	}
	$product->save();
}

include '../views/admin_header.php';
include '../views/admin_nav.php';
include '../views/product_form.php';
include '../views/footer.php';