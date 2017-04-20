<?php

class db{

	protected $db;

	public function __construct(){
		try{
			$this->db = new PDO('mysql:host=localhost;dbname=DB_NEWSLETTER;charset=utf8','root','');
			$this->db->exec('SET CHARACTER SET utf8');
			$this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
}