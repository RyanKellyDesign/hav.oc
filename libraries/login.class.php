<?php

/**
*	Login handling class
*
*	@version 1.1
*	@author  Nick Sheffield
*
*/

session_start();

class Login{

	public static function log_in($id = 0, $admin = false){
		self::create_user();

		if($id != 0){
			$_SESSION['user']['id'] = $id;
		}

		if($admin){
			$_SESSION['user']['admin'] = $admin;
		}

		$_SESSION['user']['logged_in'] = true;
	}

	public static function log_in_admin($id = 0){
		self::log_in($id, true);
	}



	public static function log_out(){
		self::create_user();
		$_SESSION['user']['id'] = 0;
		$_SESSION['user']['admin'] = false;
		$_SESSION['user']['logged_in'] = false;
	}



	public static function kickout(){
		self::create_user();
		if(!self::is_logged_in()){
			header('location: login.php');
			exit;
		}
	}



	public static function kickout_non_admins(){
		self::create_user();

		if(self::is_admin() == false){
			header('location: login.php');
			exit;
		}
	}



	public static function is_logged_in(){
		self::create_user();
		return $_SESSION['user']['logged_in'];
	}

	public static function is_admin(){
		self::create_user();
		return isset($_SESSION['user']['admin']) && $_SESSION['user']['admin'];
	}



	private static function create_user(){
		if(!isset($_SESSION['user'])){
			$_SESSION['user'] = array();
		}
	}
}