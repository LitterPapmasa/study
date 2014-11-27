<?php

class Person{
    private $data = array();
    private $_val;
    
    public $out;
    function __set ($n, $v){
        $this->data[$n] = $v;
    }

    function __get($n){
        return $this->data[$n];
    }
    
    function __call($name, $arr){
   //      $this->$out = $name." ";//.$var;
     //    echo $this->out;
        return "hello";
    }
    //Используем  класс как строку
    function __toString(){
        return __CLASS__;
    }
    //Если используют класс как функцию
    public function __invoke($var){
        return $var*$var;
    }
    
    function __constructor($val){
        $this->_val = $val;
    }
    function plus(){
         $this->_val*2;
        return $this;
    }
    function minus(){
        $this->_val;
        return $this;
    }
    function exec(){
        
    }
    
}

$x = new Person;
$x->name = 'Bac9I';
echo $x->name,"<br>";
echo $x->foo(1),"<br>";
echo $x,"<br>";
echo $x(5),"<br>";

$y = new Person(5);
echo $y->plus()->minus();