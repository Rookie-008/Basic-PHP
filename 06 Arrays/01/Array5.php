<?php  

$Flavors = [["Strawberry", "10"],["Caramel","20"],["Guava","30"],["Cherry","40"]];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Flavors</title>
</head>
<body>

<h1>Array Numerik</h1>

<?php foreach ($Flavors as $flavor) : ?>

<ul>
	<li>Name : <?php echo $flavor[0]; ?></li>
	<li>Cost : <?php echo $flavor[1]; ?></li>
</ul>

<?php endforeach; ?>

</body>
</html>