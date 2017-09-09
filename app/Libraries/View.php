<?php namespace App\Libraries;

class View
{
	
	public static function render($filename, array $variables = [])
	{
		extract($variables);
		require_once APP_ROOT.'views/'.$filename.'.view.php';
	}
}