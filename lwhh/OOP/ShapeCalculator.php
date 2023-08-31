<?php

class Shape{
    protected $name;
    protected $area;

    public function __construct($name){
        $this->name = $name;
        $this->calculateArea();
    }

    public function getArea(){
        echo " {$this->name}'s area is {$this->area}\n";
    }

    public function calculateArea(){}
}

class Triangle extends Shape{
    private $a, $b, $c;

    public function __construct($a, $b, $c){
        $this->a = $a;
        $this->b= $b;
        $this->c = $c;
        parent::__construct("Triangle");
    }

    public function calculateArea(){
        $perimeter = ($this->a + $this->b + $this->c) / 2;
        $this->area = sqrt($perimeter * ($perimeter - $this->a) * ($perimeter - $this->b) * ($perimeter - $this->c));
    }
}


$tr = new Triangle(5,5,5);
$tr->getArea();



class Rectangle extends Shape{
    private $a, $b;


    public function __construct($a, $b){
        $this->a = $a;
        $this->b= $b;
        parent::__construct("Rectangle");
    }


    public function calculateArea(){
        $this->area = $this->a * $this->b;
    }
}


$re = new Rectangle(4,5);
$re->getArea();