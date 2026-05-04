<?php  

$Flavours = [["Strawberry", "10"],["Banana","20"],["Guava","30"],["Cherry","40"]];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Flavours</title>
</head>
<body>

<h1>Array Numerik</h1>

<?php foreach ($Flavours as $flavour) : ?>

<ul>
	<li>Name : <?php echo $flavour[0]; ?></li>
	<li>Id   : <?php echo $flavour[1]; ?></li>
</ul>

<?php endforeach; ?>

</body>
</html>
