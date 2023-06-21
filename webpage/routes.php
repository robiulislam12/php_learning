<?php 

$urls = parse_url($_SERVER['REQUEST_URI'])["path"];


$routes = [
    "/" => "controllers/index.php", 
    "/form" => "controllers/form.php", 
];

if(array_key_exists($urls, $routes)){
    require $routes[$urls];
} else{
    http_response_code(404);
    require "view/404.php";
    die();
}