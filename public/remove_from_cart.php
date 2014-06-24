<?php

require_once '../libraries/cart.lib.php';

$product_id = $_GET['id'];

Cart::remove_product($product_id);

header('location: '.$_SERVER['HTTP_REFERER']);
exit;