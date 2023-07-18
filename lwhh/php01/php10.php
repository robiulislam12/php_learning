<?php 

$fname = "Robiul";
$lname = "Islam";

printf('%2$s %1$s ', $fname, $lname); // %2$s is the format specifier for the first argument, %1$s is the format specifier for the second argument
echo "\n";

$n = 45.1245;
printf('%0.2f', $n); // output -> 45.12
echo "\n";


$m = 125;
$r = 27;

printf('%04d', $m); // output -> 0125
echo "\n";

printf('%04d', $r); // output -> 0027
echo "\n";

printf('%05d', $m); // output -> 00125
echo "\n";

printf('%05d', $r); // output -> 00027
echo "\n";


$p = 45.1245;
printf('%08.2f', $p); // output -> 00045.12, here count also dot(.) as a character, so be careful

