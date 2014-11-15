<?php
$a = 'name';
$$a = "peter";
$$$a = (bool) "2wa123sya";


echo "<p>";
echo $a," ", $name," ",$$name;
echo "</P>";

$b = "kljsdhfklj klasjdhfkljasd q3rouiwryieuy98793o 39084 9238::";

echo substr_count($b, ":");
/*
$name = trim(strip_tags($_POST['name']));
$age = (int)$_POST['age'];
$message = htmlspecialchars($_POST['message']);
*/
echo "<br>";

function out($mass,$level = 2,$i = 0) {
    foreach ($mass as $key => $char){
        $out[$key] = "$char";
        if ($level >0){
            inner($mass, $out[$key], $level);

        }else{
            echo $out[$key];
        }
    }
}



function inner($mass, $pref, $level= 0){
    do{
        foreach ($mass as $char){
            $out = $pref.$char;
            if ($level <=0) {
                echo $out."<br>";
            }else{
                --$level;
                inner($mass, $out, $level);
                ++$level;
            }

            //return $out;
        }

    }while ($level >0);
}

/*
function perebor($mass,$count =2, $prohod = 0){
    do {
        if ($count >0) {
            foreach ($mass as $char){
                echo $out = $char."<br>";
                if ($prohod == 1){
                    echo "-";
                    perebor($mass, $count--,$prohod++);
                }
            }
        }else{
            break;
        }
    }while($count >0);


}
*/
$mass = array("a","b","c","d");

out($mass);
