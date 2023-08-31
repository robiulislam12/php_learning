<?php

class Human{
    public $name;
    function sayHi(){
        echo "Salam \n";
    }

    function sayName(){
        echo "My Name is {$this->name}";
    }
}


$h1 = new Human();
$h1 ->name = "Ali";   
$h1 -> sayHi();
$h1 -> sayName();