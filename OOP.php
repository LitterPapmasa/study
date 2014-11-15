<?php

class Human
{
    public $name, $yearOfBorn;
    function __construct($name, $year) {
        $this->name = $name;
        $this->yearOfBorn = $year;
    }
}

// code execution
$billGates = new Human("Bill Gates", 1955);
foreach ($billGates as $name => $value) {
    echo $name . " : " . $value . "<br/>";
}
$arr = array(1,3,5);
$count = count($arr);
if ($count = 0) {
    echo "Массив пуст.";
} else {
    echo "Массив состоит из $count элементов.";
}

print_r ($arr);
