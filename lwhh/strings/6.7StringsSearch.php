<?php

$strings = "Quick brown Brown fox jumps over the lazy dog";

// Replace a word in a string
// $replaceString = str_replace("brown", "red", $strings); // Quick red Brown fox jumps over the lazy dog

// echo $replaceString;

// case insensitive search
// $replaceString = str_ireplace("brown", "red", $strings); // Quick red red fox jumps over the lazy dog
// echo $replaceString;


// we're use str_ireplace() function to replace the word in a string
// we can replace multiple words in a string, use str_ireplace() method, give a parameter an array

$multipleReplace = str_ireplace(array("brown, dog"), "word", $strings);

// echo $multipleReplace;
print_r($multipleReplace);
