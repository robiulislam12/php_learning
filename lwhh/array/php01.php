<?php

$students = array(
    "Rahim",
    "Rafiq",
    "Karim",
    123,
    "Monir"
);

// echo count($students);

// array loop ( Good practice)
$numbersOfElements = count($students);
for($i = 0; $i < $numbersOfElements; $i++){
    echo $students[$i].PHP_EOL;
}
