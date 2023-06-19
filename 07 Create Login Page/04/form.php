<?php
// Check Data in $_GET 
// function isset Check variabel already Created or Not (!isset)

if ( !isset($_GET["name"]) ||  
	 !isset($_GET["picture"])) {
	// redirect
	header("Location: menu.php");
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>List Form</title>
</head>
<body>

<ul>
	<li>
		<img src ="img/<?php echo $_GET["picture"]; ?>">
	</li>
	<li><?php echo $_GET["name"]; ?></li>
</ul>

<a href="menu.php">Back to Menu</a>

</body>
</html>