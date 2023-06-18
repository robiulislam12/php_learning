<?php 

// Spacesheet Operator <=> = it give 3 value, if value = value => return 0, if value != value => return 1, if value > value => return 1



$x = 10;
$y = 5;

$result = $x <=> $y;

if($result == 1){
    echo "x is greater than y";
}else if($result == 0){
    echo "x is equal to y";
}else{
    echo "x is less than y";
}