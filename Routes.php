<?php
class Routes
{
    private $controler;
    private $routes=[];


    public function __construct() {
        $fichier = "routes.json";
        if (!file_exists($fichier)) {
            throw new Exception("Le fichier $fichier n'existe pas.");
        }
    
        $json = file_get_contents($fichier);
        if ($json === false) {
            throw new Exception("Impossible de lire le fichier $fichier.");
        }
    
        $donnees = json_decode($json, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new Exception("Erreur JSON : " . json_last_error_msg());
        }
    
        $this->routes=$donnees;
    }
    public function getRoutes() {
        return $this->routes;
    }
    public function getRoute($routeName) {
        return $this->routes[$routeName];
    }

}