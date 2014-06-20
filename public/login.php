<?php 

require_once '../libraries/database.lib.php';
require_once '../libraries/hash.class.php';
require_once '../libraries/form.class.php';
require_once '../libraries/login.class.php';
require_once '../libraries/model.lib.php';
require_once '../models/user.model.php';

require_once '../models/product.collection.php';
require_once '../models/category.collection.php';

if($_POST){
	$user = new Admin();

	$user->username = $_POST['username'];
	$user->password = $_POST['password'];

	if($user->authenticate()){
		Login::log_in();
		header('location:admin.php');
		exit;
	}else{
		$error = 'Invalid email or password';
	}
}


include '../views/header.php';
include '../views/nav.php';
include '../views/login_form.php';
include '../views/footer.php';