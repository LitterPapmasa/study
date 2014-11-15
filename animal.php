<?php

class Animal
{
    private $name;

    public function getName()
    {
        return $this->name;
    }

    public function __construct($setName)
    {
        $this->name = $setName;
    }
}

class Cat extends Animal
{
    public function meow()
    {
        return "Cat ".$this->getName()." is saying meow";
    }
}

// code execution
$cat = new Cat('garfield');
echo  $cat->getName() , '<br>', $cat->meow();
