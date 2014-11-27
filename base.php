<?php
$mass = array('$22' + 33,
              '$22',
              '3%0' + "5",
              0123, 
              0xFF             
              );
              
foreach ($mass as $a){
    echo $a." ".gettype($a).'<br>';
}


$b = $c = 7;
echo $b," $c<br>";
$a = "21";
$b = "20";
echo ($a > $b)." ".gettype(($a < $b)).'<br>';


 $a = 5; 
 $b = 2.5;
 echo ($a / $b)." ".gettype(($a / $b)).'<br>';
