<?php

require __DIR__ . "/app/views/header.tpl.php";
require __DIR__ . "/app/views/' . $viewName . '.tpl.php";
require __DIR__ . "/app/views/footer.tpl.php";

// Chargement de l'autoload pour les routes
require __DIR__ . '/vendor/autoload.php';


$router = new AltoRouter();

//? déclaration de la route de la HOME
$router->map(
    'GET', 
    '/', 
    [
   'method' => 'home',
   'controller' => 'MainController'
   ], 
   'home'
);

