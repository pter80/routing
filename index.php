<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require_once ("Routes.php");



$uri = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
echo $_SERVER["QUERY_STRING"];
$controler=$uri[3];
$routes=new Routes();
var_dump($routes->getRoutes());

switch ($controler) {
    case "toto":
        $route=$routes->getRoute("toto");
        break;
    case "user":
        $route=$routes->getRoute("user");
        break;
    default :
        echo "404 Not found";
}
require_once($route["routeController"]);
$controller=new $route["className"];

