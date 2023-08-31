<?php

// Learning Interfaces

/**
 * 
 * What are Interfaces?
 * Interfaces allow you to specify what methods a class should implement.
 * Interfaces make it easy to use a variety of different classes in the same way.       When one or more classes use the same interface, it is referred to as   "polymorphism".
 * Interfaces are declared with the interface keyword:
 * 
 */

 /**
  * 
  * Interfaces code ke sundar korte help kore.
  * Jokhon amra kono OOP class a ki ki method thakbe, seta bole dibo or amra age theke janbo. Tokhon Interfaces class ta use korbo
  * karon ata amak sundar coding a help korbe
  */

interface BaseAnimal{
    function isAlive();
    function canEat($param1, $param2);
    function breed();
}

class Animal implements BaseAnimal{
    function isAlive(){}
    function canEat($param1, $param2){}
    function breed(){}
}

/***
 * 
 * Infaces class nijew ar akta interfaces ke extends kore niye kaj korte pare
 * 
 * 
 */

interface BaseHuman extends BaseAnimal{
    function canTalk();
}

class Human implements BaseHuman{
    function isAlive(){}
    function canEat($param1, $param2){}
    function breed(){}
    function canTalk(){}
}


$h = new Human();
$a = new Human();
echo $a instanceof BaseHuman;
// echo $h instanceof BaseAnimal;