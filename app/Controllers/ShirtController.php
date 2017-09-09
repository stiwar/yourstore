<?php namespace App\Controllers;

use App\Libraries\View;
use App\Models\Shirt;

class ShirtController
{

	private $shirt;

	public function __construct(){
		$this->shirt = new Shirt();
	}

	public function showDetail($id){
		$article = $this->shirt->view($id);
		if($article)
			View::render('articles/article',compact('article'));
		else
			View::render('error');
	}
}