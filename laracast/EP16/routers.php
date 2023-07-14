<?php

$urls = parse_url($_SERVER['REQUEST_URI'])['path']; // parse_url find your path without any query

$routes = [
    '/' => "./controllers/index.php",
    '/about' => './controllers/about.php',
    '/contact' => "./controllers/contact.php",
]; 

function routesToControllers($urls, $routes) {
    if (array_key_exists($urls, $routes)) {
        require $routes[$urls];
    } else {
        abort();
    }
}

// here I'll create a function, which work for my http code. 
function abort($code = 404){
    http_response_code($code);
    require "controllers/{$code}.php";

    die();
}


routesToControllers($urls, $routes);
