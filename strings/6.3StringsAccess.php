<?php 

// how to access characters in a string

$strings = "Hello world!";

// Strings is like a array so you can access this by index
echo $strings[0]; // H

echo PHP_EOL;

echo $strings[4]; // o

echo PHP_EOL;
echo PHP_EOL;



for($i =0; $i < strlen($strings); $i++){
    echo $strings[$i] ."\n";
}

echo PHP_EOL;


// divided a string into substrings, give a string value, and where to start, where to end

echo substr($strings, 0, 5); // Hello