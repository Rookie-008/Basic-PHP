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
	 "id" => "10"
	],
	["name" => "Banana",
	 "id" => "20"
	],
	["name" => "Guava",
	 "id" => "30"
	],
	["name" => "Cherry",
	 "id" => "40"
	],
	["name" => "Watermelon",
	 "id" => "50"
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
echo $flavours[1]["name"];


</body>
</html>