<?php

require_once '../libraries/database.lib.php';
require_once '../models/category.collection.php';
require_once '../libraries/form.class.php';
require_once '../models/product.collection.php';
require_once '../libraries/login.class.php';
require_once '../libraries/model.lib.php';
require_once '../libraries/collection.lib.php';
require_once '../libraries/cart.lib.php';
require_once '../libraries/image.lib.php';

$cart_products = array();

$grand_total = 0;

foreach($_SESSION['cart'] as $id => $qty){
	$product = new Model('tb_products');

	$product->load($id);
	$total_price = $qty * $product->price;

	$grand_total += $total_price;

	$img = new Image($product->image);

	$img->resize(300,200);
	//$img->output('assets/thumbs/');

	$cart_products[] = array(
		'image'         => $product->image,
		'total_price'   => $total_price,
		'price'         => $product->price,
		'quantity'      => $qty,
		'name'          => $product->name,
		'id'            => $product->id

		);
}

include '../views/header.php';
include '../views/nav.php';
include '../views/cart_view.php';
include '../views/footer.php';