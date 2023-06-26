<?php

// generate a key
function displayGenrateKey($key){
    printf(" value = '%s' ", $key);
}

// encode from original data
function displayScrambledData($originalData, $key){
    $original_key="abcdefghijklmnopqrstuvwxyz1234567890";
    $data = "";
    $length = strlen($originalData);
    for($i = 0; $i < $length; $i++){
        $currentCharacter = $originalData[$i];
        echo $i."\n";
        $position = strpos($original_key, $currentCharacter);
        if($position !== false){
            $data .= $key[$position];
        } else {
            $data .= $currentCharacter;
        }
    }

    return $data;
}

$updateData = displayScrambledData("Hello World", "6zk80b9a7cd4f1myjxtlerswoun25hpqgi3v");

echo $updateData;


// decode from encoded data
function displayDecodedData($originalData, $key){
    $original_key="abcdefghijklmnopqrstuvwxyz1234567890";
    $data = "";
    $length = strlen($originalData);
    for($i = 0; $i < $length; $i++){
        $currentCharacter = $originalData[$i];
        $position = strpos($key, $currentCharacter);
        if($position !== false){
            $data .= $original_key[$position];
        } else {
            $data .= $currentCharacter;
        }
    }

    return $data;
}

