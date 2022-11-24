<?php

trait name{
    public function Greating(){
        echo "Hello Bangladesh";
    }
}
trait age{
    public function myAge(){
        echo "My Age is ". 67;
    }
}

class student{
    use name;
    use age;
}

$obj = new student();
$obj->Greating();
echo "<br>";
$obj->myAge();
