<?php
// class con{
//     // public $a = 5, $b=2, $c = 10;
//     public $a, $b, $c;
//     function __construct($a, $b, $c){
//         $this->a = $a;
//         $this->b = $b;
//         $this->c = $c;
//     }
//     // function show(){
//     //     echo "<br>". $this->a ."<br>". $this->b ."<br>". $this->c;
//     // }
//     function show(){
//         return $this->a ."<br>" . $this->b ."<br>" . $this->c;
//     }
// }




// $c = new con(50, 100, 200);
// $re = $c->show();

// echo $re;

class myConstruc{
    public $name, $age, $roll;
    function __construct($name='Not Set', $age=null, $roll=null){
        $this->name = $name;
        $this->age = $age;
        $this->roll = $roll;
    }
    
    function setName($name){
        $this->name = $name;
    }
    function setAge($age){
        $this->age = $age;
    }
    function setRoll($roll){
        $this->roll = $roll;
    }

    function bio(){
        echo "Name is : ". $this->name ." and age is : ". $this->age ." also roll is :". $this->roll;
    }    
}

$obj = new myConstruc("Ruman Miah", 45, 475400);
$obj->bio();
echo "<br>";
$obj2 = new myConstruc('Rana Khan', 56, 12);
$obj2->bio();