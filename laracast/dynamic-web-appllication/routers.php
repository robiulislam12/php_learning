<?php

$urls = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => "./controllers/index.php",
    '/about' => './controllers/about.php',
    '/contact' => "./controllers/contact.php",
];

function routesToControllers($urls, $routes) {
    if (array_key_exists($urls, $routes)) {
        require $routes[$urls];
    } else {
        http_response_code(404);
        require './controllers/404.php';
    }
}


routesToControllers($urls, $routes);
