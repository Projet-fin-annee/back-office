<?php

class Router
{

  public function routeReq()
  {
    try {
      require_once('models/model.php');

      $url = '';

      if (isset($_GET['url'])) {
        $url = explode('/', filter_var($_GET['url'], FILTER_SANITIZE_URL));
        $controller = ucfirst(strtolower($url[0]));
        $controllerClass = "Controller" . $controller;
        $controllerFile = "controllers/" .      $controllerClass . ".php";

        if (file_exists($controllerFile)) {
          require_once($controllerFile);
          new $controllerClass($url);
        } else {
          throw new Exception("Page introuvable");
        }
      } else {

        require_once("views/viewLogin.php");
      }
    } catch (Exception $e) {
      $e->getMessage();
    }
  }
}
