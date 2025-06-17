<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require_once ("Routes.php");




$uri = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
//var_dump($uri);
echo $_SERVER["QUERY_STRING"];
$controler=$uri[3];
$id=null;
$routeControler=null;
$routes=new Routes();
var_dump($routes->getRoutes());

switch ($controler) {
    case "toto":
        $id=$uri[4];
        $routeController="./Controllers/TotoController.php";
        $className="TotoController";
        break;
    default :
        echo "404 Not found";
}
require_once($routeController);
$controller=new $className;

echo "id : ".$id."\n";

