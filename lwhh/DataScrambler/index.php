<?php 

    include_once 'functions.php';

    $mode= 'encode';

    // check mode if not empty
    if(isset($_GET['task']) && $_GET['task'] !== ""){
        $mode = $_GET['task'];
    }


    // create a key
    $key="abcdefghijklmnopqrstuvwxyz1234567890";

    // generate a key check
    if("key" == $mode){
        $key_original = str_split($key); // split the key for create a array
        shuffle($key_original); // shuffle the key
        $key = implode($key_original); // create a new key
    } else if(isset($_POST['key']) && $_POST['key'] !== ""){
        $key = $_POST['key'];
    }

    // encoded data set
    $scrambledData = '';
    if("encode" === $mode){
        $data = $_POST['data'] ?? '';
        if($data !== ""){
            $scrambledData = displayScrambledData($data, $key);
        }
    }

    // decoded data set
    if("decode" === $mode){
        $data = $_POST['data'] ?? '';
        if($data !== ""){
            $scrambledData = displayDecodedData($data, $key);
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Example</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <style>
        body {
            margin-top: 30px;
        }

        #data {
            width: 100%;
            height: 160px;
        }

        #result {
            width: 100%;
            height: 160px;
        }

        .hidden {
            display: none;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20">
            <h2>Data Scrambler</h2>
            <p>Use this application to scramble your data</p>
            <p>
                <a href="/index.php?task=encode">Encode</a> |
                <a href="/index.php?task=decode">Decode</a> |
                <a href="/index.php?task=key">Generate Key</a>

            </p>
        </div>
    </div>
    <div class="row">
        <div class="column column-60 column-offset-20">
            <form method="POST" action="index.php<?php if("decode" == $mode) echo "?task=decode"; ?>">
                <label for="key">Key</label>
                <input type="text" name="key" id="key" <?php displayGenrateKey($key)?>>
                <label for="data">Data</label>
                <textarea name="data" id="data"><?php if(isset($_POST['data'])) {echo $_POST['data'];} ?></textarea>
                <label for="result">Result</label>
                <textarea id="result"> <?php echo $scrambledData; ?> </textarea>
                <button type='submit'>Do It For Me</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>