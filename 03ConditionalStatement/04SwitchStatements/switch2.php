<?php  

$Season = "5";

switch ($Flavor) {
	case 'Spring':
		echo "Busy Days";
		break;
	case 'Summer':
		echo "Good Time for Vacation";
		break;
	case 'Fall':
		echo "To The Mountain for some Wood";
		break;
	case 'Winter':
		echo "Dont Forget, We need Jacket and a cup of Wine";
		break;

	default:
		echo "Choose Spring,Summer,Fall or Winter";
		break;
}

?>