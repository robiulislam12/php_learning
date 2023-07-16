<?php

require './functions.php';
// require "routers.php";
require './Database.php';

$config = require 'config.php';


$db = new Database($config);
$posts = $db-> query("select * from posts")->fetchAll();

// var_dump($posts);



foreach($posts as $post) {
    $html = "<li> {$post['title']} </li>";
    $html .= "<p> {$post['Description']} </p>";
    echo $html;
}


