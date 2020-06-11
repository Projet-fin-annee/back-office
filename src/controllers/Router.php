<?php

class Router
{

  public function routeReq()
  {
    try {
      spl_autoload_register(function ($class) {
        require_once('models/' . $class . '.php');
      });

      $url = '';

      if (isset($_GET['url']) &&  $_SESSION["login"] == "OK") {
        $url = explode('/', filter_var($_GET['url'], FILTER_SANITIZE_URL));
        $controller = ucfirst(strtolower($url[0]));
        $controllerClass = "Controller" . $controller;
        $controllerFile = "controllers/" . $controllerClass . ".php";

        if (file_exists($controllerFile)) {
          require_once($controllerFile);
          new $controllerClass($url);
        } else {
          throw new Exception("Page introuvable");
        }
      } else {
        require_once("controllers/ControllerLogin.php");

        new ControllerLogin($url);
      }
    } catch (Exception $e) {
      $e->getMessage();
    }
  }
}
