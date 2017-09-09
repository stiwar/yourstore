<?php namespace App\Libraries;

	class Autoload{

		public static function run(){

			spl_autoload_register(function($class){
				echo "al auto load le llega: ".$class."<br>";
				$ruta = str_replace("\\", "/", $class).".php"; //parametros: lo que se busca, por lo que se reemplaza, donde se busca
			 	include_once $ruta;			 
			});	
		
		}

	}