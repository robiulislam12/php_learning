<?php 

/**
 * This lesson, I learn type of variable and how to use comment in php
 * 
 * variable and constant
 * comment
 * 
 */

/**
 * variable
 * 
 * we will change variable all time
 * So, they will give you, different value
 * 
 */

$name = "Robiul Islam";
echo $name; // roboul isllam
echo "\n";

$name = "Hasin Hyder";
echo $name; // Hasin Hyder
echo "\n";

/**
 * 
 * constant
 * we are not change constant all time
 * we are not use it in strings without concatenation
 */

// define method
define("PI", 3.1416);
echo PI; // 3.1416
echo "\n";

echo "Value of PI = {PI}"; // not result 3.1416
echo "\n";
echo "value of Pi = ".PI;
echo "\n";

// have a one trick
$constant = "constant";
// echo "value of PI = {$constant(PI)}";

