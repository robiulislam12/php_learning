<?php 

$j = 1;

for($n = 1; $n <= 10; $n++){
    $result = 1;

    for($i = $n; $i >= 1; $i--){
        $result *= $i;
        $j++;
    }

    // echo "$n factorial of $result \n";
}

// echo "Operation call $j \n";


$result = 1;
for($n = 1; $n <= 20; $n++){

    $result *= $n;

    $j++;

    echo "$n factorial of $result \n";
}

echo "Operation call $j \n";



