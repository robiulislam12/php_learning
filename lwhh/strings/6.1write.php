<?php 
$name = "Robiul";
$string = "My Name is $name";

// Heredoc and null doc is a strings in php

$heredoc = <<<EOD
This is Heredoc
you can call here, any string function or any variable
like $name and new line \n
EOD;

echo $heredoc;