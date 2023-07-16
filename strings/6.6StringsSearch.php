<?php

$strings = "Quick brown fox jumps over the lazy dog";

// how to find string positions
// PHP have a function called strpos(), which returns the position of a string

echo strpos($strings, "the");

echo PHP_EOL;

$offset = strpos($strings, "Quick");

if($offset !== false) {
    echo "\n Word Is found\n";
} else {
    echo "\n Word Is Not found\n";
}