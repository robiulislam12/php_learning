<?php 

// for loop
for($i=0;$i<10;$i++){
    echo $i;
    echo PHP_EOL;
}

echo "While loop \n";

// while loop
$i = 1;
while($i < 10){
    echo $i;
    echo PHP_EOL;
    $i++;
}

echo "do While loop \n";

// do while loop
$i = 1;
do{
    echo $i;
    echo PHP_EOL;
    $i++;
} while($i < 10);

echo PHP_EOL;

// multiple step
for($i = 1, $j=9; $i < 10; $i++, $j--){
    echo $i." : ".$j;
    echo PHP_EOL;
}