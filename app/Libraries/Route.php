<?php namespace App\Libraries;

use App\Libraries\View;

class Route
{
	
	public static function request($controller = NULL, $action = 'index', $argument = NULL){
		
		if($controller){
			$controller = "App\\Controllers\\{$controller}Controller";
			$controller = new $controller;

			if(method_exists($controller, $action)){
				return $controller->$action($argument);
			}
		
		}else{
			View::render('error');
		}

	}
}