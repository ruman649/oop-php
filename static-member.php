<?php

class student{
    public static $name;
    public static function set($n){
        self::$name = $n;
    }
    public static function get(){
        echo "name is ". self::$name;
    }
}

$obj = new student();

student::set('Ruman Miah');
student::get();



class employee{
    static $name;
    static function set($name){
        self::$name = $name;
    }
}

class managers extends employee{
    static function get(){
        echo "Name is ". self::$name;
    }
}

echo "<br>";

$managers = new managers();
$managers::set("Ruman");
$managers::get();


?>
