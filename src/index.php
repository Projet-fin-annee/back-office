<?php

define("URL", str_replace("index.php", "", (isset($_SERVER["HTTPS"]) ? "https" : "http") . "://$_SERVER[HTTP_HOST]"));
session_start();
require_once('controllers/Router.php');

$router = new Router();
$router->routeReq();

ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);
