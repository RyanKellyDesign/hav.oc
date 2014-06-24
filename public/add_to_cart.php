<?php

require_once '../libraries/cart.lib.php';

$product_id = $_POST['id'];
$quantity = $_POST['quantity'];

Cart::add_product($product_id, $quantity);

header('location: '.$_SERVER['HTTP_REFERER']);
exit;