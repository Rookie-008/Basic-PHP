<?php  

// ARRAY BASIC
// $flavours = [

// 	["Strawberry", "10"],
// 	["Banana","20"],
// 	["Guava","30"],
// 	["Cherry","40"]
// 	["Watermelon","50"]

// ];

// ARRAY ASSOCIATIVE
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
	],
	["name" => "Pineapple",
	 "cost" => "60",
	 "id"   => [30,35,40],
	 "image" => "pineapple.png"
	],
	["name" => "Grapes",
	 "cost" => "70",
	 "id"   => [35,40,45],
	 "image" => "grapes.png"
	],
	["name" => "Orange",
	 "cost" => "80",
	 "id"   => [40,45,50],
	 "image" => "orange.png"
	],
	["name" => "Papaya",
	 "cost" => "90",
	 "id"   => [45,50,55],
	 "image" => "papaya.png"
	],
	["name" => "Coconut",
	 "cost" => "100",
	 "id"   => [50,55,60],
	 "image" => "coconut.png"
	]

];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Flavours</title>
</head>
<body>

<h1>Array Associative</h1>

<!-- Print Array -->
<!-- echo $flavours[1]["name"]; -->

<?php foreach ($flavours as $flavour) : ?>

<ul>
	<li>
		<img src="img/<?= $flavour["image"];  ?>">
	</li>
	<li>Name : <?= $flavour["name"]; ?></li>
	<li>Cost : <?= $flavour["cost"]; ?></li>
	<li>Id   : <?= $flavour["id"]; ?></li>
</ul>

<?php endforeach; ?>

</body>
</html>