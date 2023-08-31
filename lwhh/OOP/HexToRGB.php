<?php

class RGB
{
    private $color; #ff0000
    private $red;
    private $green;
    private $blue;

    function __construct($colorCode = "")
    {
        $this->color = ltrim($colorCode, "#");
        $this->parseColor();
    }

    // Get Color method
    public function getColor()
    {
        return $this->color;
    }

    // Set Color Method
    public function setColor($colorCode)
    {
        echo "hello";
        $this->color = ltrim($colorCode, "#");
        $this->parseColor();
    }

    // color Parse 
    private function parseColor()
    {
        if ($this->color) {

            list($this->red, $this->green, $this->blue)= sscanf($this->color, '%02x%02x%02x');
            print_r($this->red);
        }
    }
}

$myColor = new RGB("#ff2f27");