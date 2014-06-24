<?php

session_start();

class Cart{

	public static function add_product($id, $qty){
		self::create_cart();

		if(isset($_SESSION['cart'][$id])){
			$_SESSION['cart'][$id] += intval ($qty);
		}else{
			$_SESSION['cart'][$id] = intval ($qty);
		}
		
	}

	public static function get_total(){
		self::create_cart();

		$amount = 0;

		foreach($_SESSION['cart'] as $quantity){
			$amount += $quantity;
		}

		return $amount;
	}

	public static function remove_product($id){
		unset($_SESSION['cart'][$id]);
	}

	public static function create_cart(){
		if(isset($_SESSION['cart']) == false){
			$_SESSION['cart'] = array();
		}
	}

	public static function set_quantity($id, $qty){
		self::create_cart();

		$_SESSION['cart'][$id] = intval ($qty);
	}

}