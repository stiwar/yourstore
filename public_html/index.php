   <?php
    
    require_once __DIR__.'/../config/app.php';
    header("Content-Type: text/html;charset=utf-8");
    use App\Libraries\Route;

    $url = $_GET['url'] ?? '';

    if($url){

      $pathArray = explode("/", $url);

      $route = ROUTES[$pathArray[0]] ?? false;

      if($route){
          $controller = $route['controller'];
          $action = $route['action'];

        if(!isset($pathArray[1]) || $pathArray[1] == ''){//sino existe el argumento
          
          Route::request($controller,$action);
        }else{
          $argument = $pathArray[1];
          Route::request($controller,$action,$argument);
        }

      }else{
        //header('HTTP/1.0 404 Not Found');
        //die('Página no encontrada!!!');
        Route::request(NULL);
      }

    }else{
        Route::request('Page','showHome');
    }