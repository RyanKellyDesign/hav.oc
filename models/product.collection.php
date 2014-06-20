<?php

require_once '../libraries/config.class.php';

class Product_collection{

	public $items = array();
	private $db;

	public function __construct($id){
		$this->db = new Database(
			Config::$hostname,
			Config::$username,
			Config::$password,
			Config::$database
			);

		$this->items = $this->db
			->select('*')
			->from('tb_products')
			->where('deleted','0')
			->where_and('category_id',$id)
			->get();
	}
}