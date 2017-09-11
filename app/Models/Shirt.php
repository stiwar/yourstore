<?php namespace App\Models;

class Shirt{

	private $conection, $sqlResult;

	public function __construct(){
		$this->conection = new Conection();
	}

	public function list(){
		$sql = 'select * from shirts';
		$sqlResult = $this->conection->returnRequest($sql);
		return $sqlResult;
	}

	public function view($id){
		/*
		$sql = 'select * from shirts where id = '.$id;
		$sqlResult = $this->conection->returnRequest($sql);
		return $sqlResult->fetch_assoc();
		*/

		$sql = 'select * from shirts where id = ?';
		$sqlResult = $this->conection->viewArticle($sql,$id);
		return $sqlResult->fetch_assoc();
	}
}