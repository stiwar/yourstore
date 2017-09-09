<?php namespace App\Controllers;

use App\Libraries\View;
use App\Models\Pant;
use App\Models\Shirt;

class PageController{

	private $pant,$shirt;

	public function __construct(){
		$this->pant = new Pant();
		$this->shirt = new Shirt();
	}

	public function showHome(){

		View::render('home');
	}

	public function showIndex(){
		
		$pants = $this->pant->list();	//el modelo hace la consulta a la BD	
		$shirts = $this->shirt->list();
		View::render('pages/index', compact('pants','shirts'));
	}

}