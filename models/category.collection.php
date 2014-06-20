<?php

require_once '../libraries/config.class.php';

class Category_collection{

	public $items = array();
	private $db;

	public function __construct(){
		$this->db = new Database(
			Config::$hostname,
			Config::$username,
			Config::$password,
			Config::$database
			);

		$this->items = $this->db
			->select('*')
			->from('tb_categories')
			->where('deleted','0')
			->get();
	}
}