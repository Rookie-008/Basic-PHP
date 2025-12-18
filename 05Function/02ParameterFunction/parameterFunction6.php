<?php  

function string($string1 = "Not Everyday Is Good, But There Is Something Good In Everyday", $string2 = "You Can Only Protect Your Liberties In This World By Protecting The Other Man Freedom"){
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
