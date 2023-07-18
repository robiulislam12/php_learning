<?php 

/**
 * 
 * How to empty value of array
 * 
*/

$name = 0;

if(isset($name)){ // majhe ata kora jabe
    echo "Name is set";
} else {
    echo "Name is not set";
}

echo "\n";

if(empty($name)){ // majhe ata kora jabe, jodi 0 shoho cai tobe ata kora jabe nah
    echo "Name is empty";
} else {
    echo "Name is not empty";
}

echo "\n";

if(isset($name) && (is_numeric($name) || $name == "")){  // Perfect holo ata try kora
    echo "Name is set and is not empty";
} else {
    echo "Name is not set or empty";
}