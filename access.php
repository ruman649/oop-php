<?php
class one{
    private $a, $b;
    function __construct($a, $b)
    {
        $this->a= $a;
        $this->b = $b;
    }

    function getInfo(){
        echo "a is : ". $this->a;
        echo "<br> b is :". $this->b;
    }
}

$one = new one(34,2);
$one->getInfo();