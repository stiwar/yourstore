<?php

define('APP_ROOT', __DIR__.'/../');
define('PUBLIC_PATH','http://yourstore.com');

//archivo de composer para el autoload
require_once APP_ROOT . 'vendor/autoload.php';

//variables de entorno incluida la configuración de BD
require_once 'env.php';

//archivo enrutador de la aplicación
require_once 'routes.php';

