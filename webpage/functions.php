<?php 

/**
 * 
 * form functions
 * 
 */
$userData;
function getFormData(){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    $userData = [
        'fname' => $fname,
        'lname' => $lname
    ];

    return $userData;
}

