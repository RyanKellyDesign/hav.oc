<?php

require_once '../libraries/database.lib.php';
require_once '../libraries/form.class.php';
require_once '../libraries/login.class.php';
require_once '../libraries/hash.class.php';
require_once '../libraries/model.lib.php';
require_once '../libraries/collection.lib.php';
require_once '../models/category.collection.php';
require_once '../models/product.collection.php';
require_once '../models/user.model.php';
require_once '../libraries/cart.lib.php';

if ($_POST) {
	$user = new User();

	$user->username = $_POST['username'];
	$user->password = Hash::make_password($_POST['password']);
	$user->salt     = Hash::salt();
	$user->save();

	
}

include '../views/header.php';
include '../views/nav.php';
include '../views/register_view.php';
include '../views/footer.php';

