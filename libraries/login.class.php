<?php 

session_start();

class Login{

	public function log_in(){
		$_SESSION['logged_in'] = true;
	}

	public function log_out(){
		$_SESSION['logged_in'] = false;
	}

	public function kickout(){
		if($_SESSION['logged_in'] == false){
			header('location: login.php');
			exit;
		}
	}

	public function is_logged_in(){
		return $_SESSION['logged_in'];
	}
}