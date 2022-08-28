<?php

/*
To map your routes, use this code
$this->addRoute(
    $httpMethod,
    $url,
    $controllerName,
    $methodName,
    $routeName
);
*/


$this->addRoute(
    'GET', // HTTP Method
    '/', // URL pattern
    'MainController', // Controller name
    'home', // Method name
    'main_home' // => route's name (for URL generation)
);

// $this->addRoute(
//     'GET', // HTTP Method
//     '/projects', // URL pattern
//     'MainController', // Controller name
//     'projectList', // Method name
//     'main_projects' // => route's name (for URL generation)
// );

// $this->addRoute(
//     'GET', // HTTP Method
//     '/project/[i:id]', // URL pattern
//     'MainController', // Controller name
//     'project', // Method name
//     'main_project' // => route's name (for URL generation)
// );

// $this->addRoute(
//     'GET', // HTTP Method
//     '/validate', // URL pattern
//     'ContactController', // Controller name
//     'validate', // Method name
//     'main_validate' // => route's name (for URL generation)
// );

$this->addRoute(
    'POST', // HTTP Method
    '/contactForm', // URL pattern
    'ContactController', // Controller name
    'postContact', // Method name
    'main_home-post' // => route's name (for URL generation)
);
