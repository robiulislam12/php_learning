<?php

/**
 * @deep copy or copy by value
 * akhane shudu marto value copy hocche but reference copy hocche nah
 */

 $person = array('fname' => "Jhon", 'lname' => "Doe");
 $newPerson = $person;
 $newPerson['fname'] = "Leo";

//  print_r($person);
//  print_r($newPerson);

 /**
 * @shallow copy or copy by reference
 * akhane value ta RAM ar je place a ache, seta copy hocche. both reference
 * 
 * Only & sign ar jonnu amon  => &$person
 * 
 */

 $person = array('fname' => "Jhon", 'lname' => "Doe");
 $newPerson = &$person;
 $newPerson['fname'] = "Leo";

//  print_r($person);
//  print_r($newPerson);


 function printUserData($person){
    $person['fname'] = "Robiul";
    print_r($person);
 }

 printUserData($person);
 print_r($person);