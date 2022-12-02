<?php

function __autoload($x){
    require "classes/". $x . ".php";
}


$test = new myOne();