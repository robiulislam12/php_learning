<?php 

/**
 * 
 * Data types of php (Primitive Data Type)
 * 
 1. Numbers (int, float, double)
 2. Strings (string)
 3. Arrays (array)
 4. Objects (object)
 5. Functions (function)
 6. Booleans (bool)
 7. Null (null)
 8. Resource (resource)
 * 
 * 
 * 
 */

//  we are print the value of the variable
$name = "Bangladesh";
echo $name;
echo "\n";

// new style var_dump(), it's back lots of things
var_dump($name); // type, length, value -> it's back is three


// strings
$country = "Bangladesh";

echo "My country is $country \n"; 

// Number (Integers, float, double)
$independent = 1971; // int
echo "My country freedom year $independent \n";

$countryAge = 50.25; // float or double
echo "My country age is $countryAge \n";


// PHP printf() -> it's amazing

$fname = "Robiul";
$lname = "Islam";

printf("My name is %s %s \n", $fname , $lname ); // %s -> parameters, and after comma, is parameters value

$planet1 = "Mercury";
$planet2 = "Jupitar";

printf("My planet is %s %s \n", $planet1 , $planet2 );
printf("My planet is %s %s \n", strtoupper($planet1) , strrev($planet2) );