<?php

try{
    $a = 1;
    $b = 0;

    if ($b == 0)
        throw new Exception ("Деление на 0!\n");
        $c = $a / $b;
} catch (Exception $e){

    echo $e->getMessage(),"<br>";
    echo "В строке ",$e->getLine(),"<br>";
    echo $e->getFile();
}
