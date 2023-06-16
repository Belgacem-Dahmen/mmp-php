<?php



$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => './controllers/index.php',
    '/contact' => './controllers/contact.php',
    '/about' => './controllers/about.php'
];


function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {

        require $routes[$uri];
    } else
        abort();
}



function abort($code = 404, $message = "404 not found")
{
    http_response_code($code);
    $pageTitle = "$message || Suivi MMP";
    $heading = "Error";
    require "./views/{$code}.view.php";
    die();
}


routeToController($uri, $routes);
