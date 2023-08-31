<?php

class MyClass {
    private $name;
    private $age;
    private $class;

    function __construct($name="", $age="", $class=""){
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    // public function getName(){
    //     return $this->name;
    // }
    // public function setName($name){
    //     $this->name = $name;
    // }



    /**-----Magic Set and Get method------ */
    public function __get($prop){
        return $this->$prop;
    }

    public function __set($prop, $value){
        $this->$prop = $value;
    }
}

$r = new MyClass("Robiul", 21,13);
// $r->setName("Robiul");
$r->age = 24;
echo $r->age;
