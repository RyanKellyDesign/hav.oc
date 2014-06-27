<?php

require_once('../libraries/model.lib.php');
require_once('../libraries/database.lib.php');
require_once('../libraries/config.class.php');
require_once('../libraries/hash.class.php');


class User extends Model {

	public function __construct(){
		parent::__construct('tb_customers');
	}

	public function authenticate(){
		
		$user = $this->db
			->select('salt')
			->from($this->table)
			->where('username',$this->data['username'])
			->get_one();

		$encrypted_pw = Hash::encrypt(
			$this->password,
			$user['salt']
		);

		$result = $this->db
					->select('id')
					->from($this->table)
					->where('password',$encrypted_pw)
					->get_one();

		if ($result['id']) {
			$this->id = $result['id'];
			return true;
		}else{
			return false;
		}
	}

}