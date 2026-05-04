<?php  

// ARRAY BASIC
// $flavours = [

// 	["Strawberry", "10"],
// 	["Banana","20"],
// 	["Guava","30"],
// 	["Cherry","40"]

// ];

// ARRAY ASSOCIATIVE
$flavours = [

	["name" => "Strawberry",
	 "id" => "10",
	 "cost"   => [5,10,15]
	],
	["name" => "Banana",
	 "id" => "20",
	 "cost"   => [10,15,20]
	],
	["name" => "Guava",
	 "id" => "30",
	 "cost"   => [15,20,25]
	],
	["name" => "Cherry",
	 "id" => "40",
	 "cost"   => [20,25,30]
	]
	["name" => "Watermelon",
	 "id" => "50",
	 "cost"   => [25,30,35]
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
echo $flavours[2]["id"][1];


</body>
</html>