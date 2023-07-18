<?php 

$student = array(
    'fname' => 'Robiul',
    'lname' => 'Islam',
    'age' => 23,
    'class' => 8,
    'section' => 'A'
);


// print_r($student);

PHP_EOL;

// echo $student['fname']." ".$student['lname']."\n";

PHP_EOL;

printf("%s %s\n", $student['fname'], $student['lname']);


// array to strings
// echo implode(" ", $student); 

/**
 * 
 * How to use array to JSON
 * 
 */

$jsonEnCodedData = json_encode($student);
$jsonDeCodedData = json_decode($jsonEnCodedData);

print_r($jsonEnCodedData);