<?php

require_once '../libraries/cart.lib.php';

$product_id = $_POST['id'];
$quantity = $_POST['quantity'];

Cart::set_quantity($product_id, $quantity);

header('location: '.$_SERVER['HTTP_REFERER']);
exit;