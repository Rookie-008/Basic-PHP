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
	 "id" => "10",
	 "cost"   => [5,10,15],
	 "image" => "strawberry.jpg"
	],
	["name" => "Banana",
	 "id" => "20",
	 "cost"   => [10,15,20],
	 "image" => "banana.jpg"
	],
	["name" => "Guava",
	 "id" => "30",
	 "cost"   => [15,20,25],
	 "image" => "guava.png"
	],
	["name" => "Cherry",
	 "id" => "40",
	 "cost"   => [20,25,30],
	 "image" => "cherry.png"
	],
	["name" => "Watermelon",
	 "id" => "50",
	 "cost"   => [25,30,35],
	 "image" => "watermelon.png"
	],
	["name" => "Pineapple",
	 "id" => "60",
	 "cost"   => [30,35,40],
	 "image" => "pineapple.png"
	],
	["name" => "Grapes",
	 "id" => "70",
	 "cost"   => [35,40,45],
	 "image" => "grapes.png"
	],
	["name" => "Orange",
	 "id" => "80",
	 "cost"   => [40,45,50],
	 "image" => "orange.png"
	],
	["name" => "Papaya",
	 "id" => "90",
	 "cost"   => [45,50,55],
	 "image" => "papaya.png"
	],
	["name" => "Coconut",
	 "id" => "100",
	 "cost"   => [50,55,60],
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
	<li>Cost : <?= $flavour["id"]; ?></li>
	<li>Id   : <?= $flavour["cost"]; ?></li>
</ul>

<?php endforeach; ?>

</body>
</html>
