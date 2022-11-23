<?php

class calc
{
    public $a, $b, $c;
    function sum()
    {
        return $this->a + $this->b;
    }
    function sub()
    {
        return $this->a - $this->c;
    }
    function show(){
        echo "The result is ". $this->c ."<br>";
    }
}

$result = new calc();

$result->a = 12;
$result->b = 5;
$result->c = 2;

echo $result->sub()."<br>";
$result->show();
echo $result->sum()."<br>";