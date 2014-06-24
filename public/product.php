<?php

require_once '../libraries/database.lib.php';
require_once '../models/category.collection.php';
require_once '../libraries/form.class.php';
require_once '../models/product.collection.php';
require_once '../libraries/login.class.php';
require_once '../libraries/model.lib.php';
require_once '../libraries/collection.lib.php';

$currentProduct = new Model('tb_products');
$currentProduct->load($_GET['id']);


include '../views/header.php';
include '../views/nav.php';
include '../views/product_view.php';
include '../views/footer.php';
