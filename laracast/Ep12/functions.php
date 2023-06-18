<?php


function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

dd($_SERVER['REQUEST_URI']);

/**
 * 
 * Here I will check our url and add active style this url page.
 * 
 * @param string $value
 */
function urlIs($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}
