<?php 
$filename = "F:/php/lwhh/file/data/f2.txt";
$fp = fopen($filename, "a");

if(is_writeable($filename)){
    // $prevData = file_get_contents($filename);


    // fwrite($fp, $prevData);
    $data = "Hello world" . "\n";

    fwrite($fp, $data);

    fclose($fp);
}