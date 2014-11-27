<?php

abstract class Db{
    public $op;
    
    function connect(){        
    }           
    
    abstract function open();
//  abstract function close();
}

class MyDb extends Db{
    public function open(){
        
    }
}

$x = new MyDb;