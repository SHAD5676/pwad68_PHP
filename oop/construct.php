<?php

class Fruit {
    public $name;
    public $color;

    function __construct($name) {
        echo "Hello" . $name ;
    }
}

new Fruit("Shad");


?>