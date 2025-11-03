<?php

class Fruit
{
    public $name;
    public $color;

    // Setter fuction
    function set_name($name)
    {
        $this->name = $name;
    }

    // Setter fuction
    function set_color($color)
    {
        $this->color = $color;
    }

    function get_name_color() {
        return "Name: " . $this->name . "<br>" . "Color: " . $this->color;
        
    }
}

$obj1 = new Fruit;
$obj1->set_name("Apple");
$obj1->set_color("Green");
$obj1->set_color($obj1);
var_dump($obj1);
