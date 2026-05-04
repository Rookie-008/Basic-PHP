<?php 
// $_GET

$flavours = [

	["name" => "Strawberry",
	 "cost" => "10",
	 "id"   => [5,10,15],
	 "image" => "strawberry.jpg"
	],
	["name" => "Banana",
	 "cost" => "20",
	 "id"   => [10,15,20],
	 "image" => "banana.jpg"
	],
	["name" => "Guava",
	 "cost" => "30",
	 "id"   => [15,20,25],
	 "image" => "guava.png"
	],
	["name" => "Cherry",
	 "cost" => "40",
	 "id"   => [20,25,30],
	 "image" => "cherry.png"
	],
	["name" => "Watermelon",
	 "cost" => "50",
	 "id"   => [25,30,35],
	 "image" => "watermelon.png"
	]
	
];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GET</title>
</head>
<body>
	<h1>FLAVOURS</h1>

	<?php foreach( $flavours as $flavour ) : ?>
		<ul>
			<li><img src="data/img/<?= $flavour["image"]; ?>"></li>
			<li><?= $flavour["name"]; ?></li>
			<li><?= $flavour["cost"]; ?></li>
			<li><?= $flavour["id"]; ?></li>
		</ul>
	<?php endforeach; ?>


</body>
</html>