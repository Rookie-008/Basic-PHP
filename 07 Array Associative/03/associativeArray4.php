<?php  

// ARRAY BASIC
// $flavours = [

// 	["Strawberry", "10"],
// 	["Banana","20"],
// 	["Guava","30"],
// 	["Cherry","40"],
// 	["Watermelon","50"]

// ];

// ARRAY ASSOCIATIVE
$flavours = [

	["name" => "Strawberry",
	 "cost" => "10",
	 "id"   => [5,10,15]
	],
	["name" => "Banana",
	 "cost" => "20",
	 "id"   => [10,15,20]
	],
	["name" => "Guava",
	 "cost" => "30",
	 "id"   => [15,20,25]
	],
	["name" => "Cherry",
	 "cost" => "40",
	 "id"   => [20,25,30]
	]
	["name" => "Watermelon",
	 "cost" => "50",
	 "id"   => [25,30,35]
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
