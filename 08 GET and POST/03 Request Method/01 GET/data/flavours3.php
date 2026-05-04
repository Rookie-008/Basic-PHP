<?php  
// Check Data In $_GET
if( !isset($_GET["name"]) || 
	!isset($_GET["id"]) || 
	!isset($_GET["cost"]) || 
	!isset($_GET["image"])) {
	// redirect
	header("Location: ../getMethod6.php");
	exit;
} 

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Fruits</title>
</head>
<body>

	<ul>
		
		<li><img src="img/<?= $_GET["image"]; ?>"></li>
		<li><?= $_GET["name"]; ?></li>
		<li><?= $_GET["id"]; ?></li>
		<li><?= $_GET["cost"]; ?></li>

	</ul>

	<a href="../getMethod6.php">Back To Data Fruits</a>

</body>
</html>