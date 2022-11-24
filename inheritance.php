<?php

class epmloyee
{
    public $name, $age, $salary;
    function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
    function getInfo()
    {
        echo "<h1>This is student data</h1>";
        echo "Name is : " . $this->name . "<br>";
        echo "Age is : " . $this->age . "<br>";
        echo "Salary is : " . $this->salary . "<br>";
    }
}

class manager extends epmloyee
{
    public $ta = 100, $ph = 200;
    function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    function getInfo()
    {
        $total = $this->ta +  $this->ph + $this->salary;
        echo "<h1>This is manager data</h1>";
        echo "Name is : " . $this->name . "<br>";
        echo "Age is : " . $this->age . "<br>";
        echo "Salary is : " . $total . "<br>";
    }
}

class ceo extends manager{
    public $bonus = 1000;
    function __construct($name, $age, $salary)
    {
        $this->name=$name;
        $this->age = $age;
        $this->salary = $salary;
    }
    function getInfo()
    {
        $total = $this->ta +  $this->ph + $this->salary + $this->bonus;;
        echo "<h1>This is manager data</h1>";
        echo "Name is : " . $this->name . "<br>";
        echo "Age is : " . $this->age . "<br>";
        echo "Salary is : " . $total . "<br>";
    }
}

echo "<br>";
$m = new manager("Ruman Miah", 34, 800);
$m->getInfo();


$e = new epmloyee("Rana", 67, 400);
$e->getInfo();
echo "<br>";

$m2 = new manager("karIm", 89, 12);
$m2->getInfo();
echo "<br>";


$ceo = new ceo('Mr. Khan', 100, 500);
$ceo->getInfo();
