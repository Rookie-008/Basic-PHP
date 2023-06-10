<?php  

function string($string1 = "A", $string2 = "B"){
	return "-> $string1, $string2 <-";
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Function</title>
</head>
<body>
	<p><?php echo string(); ?></p>
</body>
</html>