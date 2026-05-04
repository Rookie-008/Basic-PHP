<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array Associative</title>
	<style>
		.square {
			width: 50px;
			height: 50px;
			background-color: #ec2049;
			text-align: center;
			line-height: 50px;
			margin: 5px;
			float: left;
			transition: 1s;
		}

		.square:hover {
			transform: rotate(360deg);
			border-radius: 50%;
		}
	</style>
</head>
<body>

	<?php  
		$numbers = [[5,10,15],[20,25,30],[35,40,45]];
	?>

	<!-- print array multidimensi -->
	<!-- echo $number[1][2]; -->

	<?php foreach( $numbers as $number ) : ?>
		<?php foreach( $number as $square ) : ?>
			<div class="square"><?= $square; ?></div>
		<?php endforeach; ?>
	<?php endforeach; ?>

</body>
</html>