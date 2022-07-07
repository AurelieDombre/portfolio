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

// Example for the home
$this->addRoute(
    'GET', // HTTP Method
    '/', // URL pattern
    'MainController', // Controller name
    'home', // Method name
    'main_home' // => route's name (for URL generation)
);

$this->addRoute(
    'GET', // HTTP Method
    '/projects', // URL pattern
    'MainController', // Controller name
    'projectList', // Method name
    'main_projects' // => route's name (for URL generation)
);

$this->addRoute(
    'GET', // HTTP Method
    '/project/[i:id]', // URL pattern
    'MainController', // Controller name
    'project', // Method name
    'main_project' // => route's name (for URL generation)
);

$this->addRoute(
    'GET', // HTTP Method
    '/contact', // URL pattern
    'ContactController', // Controller name
    'contact', // Method name
    'main_contactForm' // => route's name (for URL generation)
);

$this->addRoute(
    'POST', // HTTP Method
    '/contact', // URL pattern
    'ContactController', // Controller name
    'postContact', // Method name
    'main_contact' // => route's name (for URL generation)
);
