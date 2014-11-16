<?php

class Person{
    private $data = array();
    function __set ($n, $v){
        $this->data[$n] = $v;
    }

    function __get($n){
        return $this->data[$n];
    }
}

$x = new Person;
$x->name = 'Bac9I';
echo $x->name;
