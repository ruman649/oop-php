<?php

trait name{
    public function Greating(){
        echo "Hello Bangladesh";
    }
}

class student{
    use name;
}

$obj = new student();
$obj->Greating();
