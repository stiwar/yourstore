<?php namespace App\Models;

use App\Libraries\View;

class Pant{

	private $conection, $data;

	public function __construct(){
		$this->conection = new Conection();
	}

	public function list(){
		$sql = 'select * from pants';
		$sqlResult = $this->conection->returnRequest($sql);
		
		return $sqlResult;
	}

	public function view($id){
		/*
		$sql = 'select * from pants where id = '.$id;
		$sqlResult = $this->conection->returnRequest($sql);
		return $sqlResult->fetch_assoc();
		*/
		$sql = 'select * from pants where id = ?';
		$sqlResult = $this->conection->viewArticle($sql,$id);
		return $sqlResult->fetch_assoc();
	}
}