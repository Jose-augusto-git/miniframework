<?php 
    require_once "../vendor/autoload.php";

    $route = new \App\Route;

    echo 'Conseguiu está funcionando';
    echo '<hr>';


    print_r($route->getUrl());

?>