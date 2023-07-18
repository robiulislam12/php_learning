<?php  

$filename = "F:/php/lwhh/file/data/f1.txt";
$fp = fopen($filename, "r");

if(is_readable($filename)){
    /**
     * 
     * one line read
     * 
     * @code fgets(file_pointer, "optional_length")
     * 
     * you can read one line without any length like -> fgets($fp)
     * 
     */
    // $line = fgets($fp); 
    $line = fgets($fp, 8); 

    // echo $line;

    /**
     * 
     * If you want full file without build in function
     * you used while loop for it
     * while($line = fgets($fp)){ echo $line; }
     * 
     */

    while($line = fgets($fp)){
        // echo $line;
    }


    /**
     * 
     * again you want to read full file
     * use rewind($fp)
     * 
     */
    // rewind($fp);

    /**
     * 
     * If we want to skip one line, so we need to use
     * fseek($fp, $offset)
     * 
     * cursor ke jodi, last a move korate cai, tahole -1 use korbo. 
     * Tahole last theke asbe
     * 
     */
    // fseek($fp, 0);
    // fseek($fp, -1, SEEK_END);



    // Quick read function
    $data = file($filename); // it's return a array
    // print_r($data);

    $data2 = file_get_contents($filename);

    echo $data2;

}

fclose($fp);

