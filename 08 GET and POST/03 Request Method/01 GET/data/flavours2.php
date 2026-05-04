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

	<a href="../getMethod5.php">Back To Data Fruits</a>

</body>
</html>