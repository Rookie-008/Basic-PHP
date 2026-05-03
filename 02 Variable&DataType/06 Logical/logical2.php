<?php  

// &&(AND), ||(OR), !(NOT)

$a = 10;

var_dump($a < 50 && $a %5 == !$a);
echo "<br>";
var_dump($a < 50 && $a %5 == 1);
echo "<br>";
var_dump($a < 50 && $a %5 != 1);
echo "<br>";
var_dump($a < 50 && $a %5 == 1 * 0);

?>