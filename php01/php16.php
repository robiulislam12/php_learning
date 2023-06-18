<?php

$n = 5;
$r = $n % 2;

switch ($r) {
    case 0:
        switch ($n) {
            case $n < 0:
                echo "$n is a negative even number";
                break;
            case $n > 0:
                echo "$n is a positive even number";
        }
        break;
    default:
        switch ($n) {
            case $n > 0:
                echo "$n is a positive odd number";
                break;
            case $n < 0:
                echo "$n is a negative odd number";
        }
}

echo "\n";

// new style

switch (true) { // it's always call
    case (0 == $r && $n > 0):
        echo "$n is a positive even number";
        break;
    case (1 == $r && $n > 0):
        echo "$n is a positive odd number";
        break;
    case (1 == $r && $n < 0):
        echo "$n is a negative odd number";
        break;
    default:
        echo "$n is a negative even number";
}