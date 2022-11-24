<?php

interface student{
   function set($a, $b);
}

interface student2{
    function set2($c, $d);
}

class classRoom implements student, student2{
    public function set($a, $b){
        echo "sum of a and b is ". $a + $b . "<br>";
    }
    public function set2($c, $d)
    {
        echo "sum of c and d is ". $c + $d;
    }
}


$obj = new classRoom();

$obj->set(1,5);
$obj->set2(5,6);

?>