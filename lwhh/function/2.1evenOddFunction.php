<?php
function evenOdd($num)
{
    if ($num % 2 == 0) {
        return true;
    }
    return false;
}

$x = true;

// if (evenOdd($x)) {
//     echo "{$x} is even";
// } else {
//     echo "{$x} is odd";
// }


echo gettype($x);
