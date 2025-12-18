<?php  

function Score($num1, $num2){

	$value = $num1 * $num2;
	return $value;
}

$return_value = Score(100,100);
echo "Value return is : ".$return_value;

?>
