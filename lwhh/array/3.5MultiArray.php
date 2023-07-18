<?php 

$foods = [
    "vegetables" => explode(", ", "carrots, potatoes, onions"),
    "frutis" => explode(", ", "apples, oranges"),
    "drinks" => explode(", ", "water, milk")
];

print_r($foods);

PHP_EOL;

array_push($foods["frutis"], "banana");

print_r($foods);