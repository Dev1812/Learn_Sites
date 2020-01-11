<?php
class Route {
  public static function start() {
    define(ST_TT, microtime());
    $clean_slash = explode('/', htmlspecialchars($_SERVER['REQUEST_URI']));
    $split_url = explode('?', $clean_slash[1]);

    parse_str($split_url[1], $url_params);

    $controller_name = (!empty($split_url[0])) ? $split_url[0] : 'Main';
    $action_name = (!empty($url_params['act'])) ? $url_params['act'] : 'index';


    $model_name = 'Model_'.$controller_name;
    $controller_name = 'Controller_'.$controller_name;
    $action_name = 'action_'.$action_name;

    $model_file = strtolower($model_name).'.php';
    $model_path = SITE_ROOT.'application/models/'.$model_file;
    if(file_exists($model_path)) {
      include $model_path;
    }

    $controller_file = strtolower($controller_name).'.php';
    $controller_path = SITE_ROOT.'application/controllers/'.$controller_file;
    if(file_exists($controller_path)) {
      include SITE_ROOT.'application/controllers/'.$controller_file;
    } else {
      Route::ErrorPage404();
      return false;
    }
		
    $controller = new $controller_name;
    $action = $action_name;
		
    if(method_exists($controller, $action)) {
      $controller->$action();
    } else {
      Route::ErrorPage404();
    }
//    printf('<b>route</b> time issue: %.5f <br>', microtime()-ST_TT);
  }

  private static function ErrorPage404() {
    header('HTTP/1.1 404 Not Found');
    header('Status: 404 Not Found');
    include SITE_ROOT.'application/controllers/controller_not_found.php';
    $r = new Controller_Not_Found;
    $r->action_index();
  }
    
}
