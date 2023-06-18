<?php

function isEven($number){
    if ($number % 2 == 0) {
        return true;
    }
    return false;
}

// fibonacci checker

function fibonacci(int $n){
    $result = 1;
    for ($i = $n; $i > 1; $i--) {
        $result *= $i;
    }
    return $result;
}

// we will call a function or any value with types

function sum(int $n, int $m, int $k): int {
    return $n + $m + $k;
}

// unlimited perimeters
/**
 * 
 * If I will write a function with ulimit perimeters, it will give me a array of arg
 * 
 */

 function sum2(int ...$numbers){
     $result = 0;
     foreach ($numbers as $number) {
         $result += $number;
     }
     return $result;
 }


 