<?php 

define('ROUTES', [

	'' 		   => ['controller' => 'Page',  'action' => 'showHome'],
	'inicio'   => ['controller' => 'Page',  'action' => 'showIndex'],
	'pantalon' => ['controller' => 'Pant',  'action' => 'showDetail'],
	'camisa'   => ['controller' => 'Shirt', 'action' => 'showDetail']
	]);