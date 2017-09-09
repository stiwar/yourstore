<?php namespace App\Controllers;

use App\Libraries\View;
use App\Models\Pant;

class PantController
{

	private $pant;

	public function __construct(){
		$this->pant = new Pant();
	}

	public function showDetail($id){
		$article = $this->pant->view($id);
		if($article)
			View::render('articles/article',compact('article'));
		else
			View::render('error');
	}
}