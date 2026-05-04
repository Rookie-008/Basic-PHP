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
	 "cost" => "10"
	],
	["name" => "Banana",
	 "cost" => "20"
	],
	["name" => "Guava",
	 "cost" => "30"
	],
	["name" => "Cherry",
	 "cost" => "40"
	],
	["name" => "Watermelon",
	 "cost" => "50"
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