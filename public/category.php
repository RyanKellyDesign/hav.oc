<?php

require_once '../libraries/database.lib.php';
require_once '../models/category.collection.php';
require_once '../libraries/form.class.php';
require_once '../models/product.collection.php';
require_once '../libraries/login.class.php';
require_once '../libraries/model.lib.php';
require_once '../libraries/collection.lib.php';
require_once '../libraries/cart.lib.php';

$currentCategory = new Collection('tb_products', 'category_id', $_GET['id']);


include '../views/header.php';
include '../views/nav.php';
include '../views/category_list.php';
include '../views/footer.php';

