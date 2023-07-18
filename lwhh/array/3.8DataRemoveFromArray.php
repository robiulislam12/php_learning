<?php

/**
 * 
 * Jodi Array theke kono data remove korte cai tahole 
 * unset() => method ta use korte hobe
 * 
 */

$person = array('fname' => "Jhon", 'lname' => "Doe");

unset($person['lname']);

print_r($person);