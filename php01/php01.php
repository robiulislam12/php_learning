<?php 

$name = "Bangladesh";
$age = 24;

$year = "age"; 

echo $$year; // it's out put 24, why, because first $ output age, and it was $age, then $age is 24

// new line 
echo "\n";

// concat
$myName = "Robiul Islam";
$myAge = 21;

echo "Hello my name is ".$myName." and my age is ".$myAge; // this too much browning
echo "\n";
echo "Hello my name is $myName and my age is $myAge"; //it's looks good