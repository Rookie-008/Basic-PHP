<?php  

$Flavors = ["Caramel", "Chocolate", "Strawberry", "Vanilla", "Lychee"];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Foreach</title>
	<style>
		.square {
			width: 150px;
			height: 50px;
			background-color: lightgray;
			text-align: center;
			line-height: 50px;
			margin: 4px;
			float: left;
		}

		.clear {
			clear: both;		
		}
	</style>
</head>
<body>
	<!-- 1 -->
	<?php foreach($Flavors as $Flavor) { ?>
		<div class="square"><?php echo $Flavor; ?></div>
	<?php } ?>

	<div class="clear"></div>

	<!-- 2 -->
	<?php foreach($Flavors as $Flavor) : ?>
		<div class="square"><?php echo $Flavor; ?></div>
	<?php endforeach; ?>

</body>
</html>