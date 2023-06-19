<?php
// Method request GET --> Send Data from URL, 
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
	<title>GET</title>
</head>
<body>
	<h1>Data Forms</h1>
	<ul>
	<?php foreach ( $forms as $form ) : ?>
		<li>
			<a href="form.php?name=<?php echo $form["name"];?>
			&picture=<?php echo $form["picture"];?>"><?php echo $form ["name"]; ?></a>
		</li>
	<?php endforeach; ?>
	</ul>
</body>
</html>