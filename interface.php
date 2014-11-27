<?php
// Для проектирования классов
interface Hand{    
    function useKeyboard();
    function touchNose();
}
interface Legs{
    function run();
    function walk();
}

class Men implements Hand, Legs{
    function useKeyboard(){
        
    }
    function touchNose(){
        
    }
    function run(){
        
    }
    function walk(){
        
    }
}
