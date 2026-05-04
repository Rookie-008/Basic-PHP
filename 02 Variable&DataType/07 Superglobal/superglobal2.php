<?php
// Variabel Superglobals (Variable Special) --> ARRAY ASSOSIATIF
// 1. $_GET
// 2. $_POST
// 3. $_REQUEST
// 4. $_SESSION
// 5. $_COOKIE
// 6. $_SERVER
// 7. $_ENV  <== Environment

// Variable Scope
// Variable GLOBAL
// $x = 15; // <== GLOBAL Variable
// echo $x; // <== Show 10 to Output

// Variable LOCAL
// function showData() {
// 	$x = 25;   // <== $x LOCAL variable
// 	echo $x;
// } 
// showData();
// echo "<br>";
// echo $x;
// ?>

<?php
// Variabel Scope

//$x = 15;

//function showData() {
	//global $x;
	//echo $x;
//}
//showData();
?>

<?php
// SUPERGLOBALS

// 1. $_GET
//$_GET["nama"] = "WINSTON";
//$_GET["nim"] = "656667";
var_dump($_GET);

?>
