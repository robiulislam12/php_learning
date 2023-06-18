<?php

// for($i = 1; $i <= 10; $i++){
//     echo $i . "\n";
// }

$i = 0;

while ($i <= 10) {
    echo $i . PHP_EOL;
    $i++;
}

echo PHP_EOL;
echo PHP_EOL;

$i = 0;
do {
    $i++;
    echo $i . PHP_EOL;
} while($i <= 10);