<?php

class myOne{
    private $name = "Ruman";

    function __get($name)
    {
        echo "cant get $name";
    }
}

$test = new myOne();
$test->age;