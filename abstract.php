<?php

// abstract class one{
//     public $a=3, $b=1;

//     abstract protected function show($name,$age);
// }

// class twos extends one{
//     public function show($x, $y){
//         echo "Name is ". $x ."<br>";
//         echo "Name is ". $y ."<br>";
//         echo "a is ". $this->a ."<br>";
//         echo "b is ". $this->b ."<br>";
//     }
// }


// $xx = new one();
// $xx->show(1,5);



abstract class User{
    protected $username;
    abstract public function stateYourRole();

    public function setter($name){
        $this->username = $name;
    }
    function get(){
        echo "Name is " . $this->username;
    }
}

class Admin extends User{
    public function stateYourRole(){

    }
}

$parent = new Admin();
$parent->setter("RUman mIhja");
$parent->get();