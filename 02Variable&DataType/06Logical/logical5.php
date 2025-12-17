<?php  

// &&(AND), ||(OR), !(NOT)

$a = 15;

var_dump($a < 75 && $a %5 == !$a);
echo "<br>";
var_dump($a < 75 && $a %5 == 1);
echo "<br>";
var_dump($a < 75 && $a %5 != 1);
echo "<br>";
var_dump($a < 75 && $a %5 == 1 * 0);

?>
