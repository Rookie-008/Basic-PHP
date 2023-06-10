<?php  

$Flavor = "5";

switch ($Flavor) {
	case '1':
		echo "Chocolate";
		break;
	case '2':
		echo "Vanilla";
		break;
	case '3':
		echo "Strawberry";
		break;
	case '4':
		echo "Lychee";
		break;

	default:
		echo "Choose 1,2,3 or 4";
		break;
}

?>