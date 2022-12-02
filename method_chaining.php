<?php

use student as GlobalStudent;

class student{
    function one(){
        echo "This is one <br>";
        return $this;
    }
    function two(){
        echo "This is two <br>";
        return $this;
    }
    function three(){
        echo "This is three <br>";
    }
}


$x = new student();

$x->one()->two()->three();
