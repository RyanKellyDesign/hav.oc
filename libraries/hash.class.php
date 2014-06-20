<?php 


class Hash{

	public function encrypt($password, $salt){
		return hash('sha256',$salt.$password);
	}

	public function salt(){
		return hash('sha256', time()*time().time());
	}

	public function make_password($password){
		return self::encrypt($password, self::salt());
	}
	
}