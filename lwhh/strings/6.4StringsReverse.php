<?php 

$myName = "Robiul Islam";
$myNameLength = strlen($myName) - 1;


// Strings reverse for loop
for($i = $myNameLength; $i >= 0; $i--){
    echo $myName[$i]; // output -> malsI luiboR
}

echo PHP_EOL;

// string reverse with another way
$length = strlen($myName);
for($i = 1; $i <= $length; $i++){
    echo $myName[$length - $i]; // output -> malsI luiboR
}

echo PHP_EOL;

// or I can use strrev()
echo strrev($myName); // output -> malsI luiboR

echo PHP_EOL;

// I need a word to reverse
$strArr = explode(" ", $myName);

for($i = 0; $i < count($strArr); $i++){
    echo strrev($strArr[$i]) . " ";
}
