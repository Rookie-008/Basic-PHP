<?php

// $1name = "Abc"; // False
// $name1 = "Abc"; // True
$name = "Abc";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP in HTML</title>
</head>
<body>

	<h1>Hello <?php echo "Hello Hello"; ?></h1>
	<h1>Hello <?php echo $name ?></h1>

	<p><?php echo "Example"?></p>
	<p><?php echo "PHP in HTML"?></p>

</body>
</html>