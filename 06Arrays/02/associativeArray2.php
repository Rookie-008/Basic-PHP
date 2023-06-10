<?php  

$forms = [
			["name" => "Square", "picture" => "square.jpg"],
			["name" => "Round", "picture" => "round.png"],
			["name" => "Triangle", "picture" => "triangle.png"],
			["name" => "Abstract", "picture" => "abstract.jpg"],
		];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forms</title>
</head>
<body>

	<h1>Forms</h1>

	<ul>
		<li>
			<img src="img/<?php echo $form["picture"]; ?>">
		</li>
		<li>Name : <?php echo $form["name"]; ?></li>
	</ul>


</body>
</html>