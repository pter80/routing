<?php
class UserController 
{
    function __construct() {
        echo "Construction de UserController";
    }
    function read($params) {
        echo "Lecture des Users";
        var_dump($params);
    }
}