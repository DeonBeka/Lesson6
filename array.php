<?php
#last part of  lesson 5
$sports = ["Football", "Basketball", "Hockey", "Voleyball"];


for($i = 0; $i < count($sports); $i++){
    echo ($sports[$i]);
}
array_push($sports, "golf");
array_pop($sports);
array_unshift($sports, "F1");
array_shift($sports);
echo "</br>";
$vari = [1, 3, 25, 67];
array_splice($vari, 3);
echo array_sum($vari);

echo "</br>";
var_dump($sports);

?>