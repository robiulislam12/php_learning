<?php

require './functions.php';
// require "routers.php";
require 'Database.php';

$db = new Database();

$posts = $db->query("select * from posts")->fetch(PDO::FETCH_ASSOC);

dd($posts);
// foreach ($posts as $post) {
//     echo "<li>". $post['title'] ."</li>";
// }