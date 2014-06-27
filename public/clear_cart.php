<?php

require_once '../libraries/cart.lib.php';

Cart::clear_cart();

header('location: '.$_SERVER['HTTP_REFERER']);
exit;