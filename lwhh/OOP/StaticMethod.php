<?php 

/***
 * 
 * Amra Static keyword use kore jodi, kono variable declare kori, tahole amara seta kono public method a use korte parbo nah
 * without self:: keyword
 * 
 */

class MathCalculator{
    private $number;
    static $name; 

    static function fibonacci($n){
        self::$name = "Hello, Robiul! ";
        echo self::$name . "Fibonacci series up to {$n}\n";
    }

    function factorial($n){
        $this-> number = 12;
        echo "Factorial series up to {$n}\n";
    }
}


$mathC = new MathCalculator();
$mathC->factorial(4);

MathCalculator::fibonacci(7);

echo MathCalculator::$name;

