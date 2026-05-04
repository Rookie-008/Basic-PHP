<?php 
// Loop Array
// for / foreach

$numbers = [5,10,15,20,25,30,35,40,45,50,55,60,65,70,75];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Loop Array</title>

	<style>
		div {
			width: 50px;
			height: 50px;
			background-color: limegreen;
			text-align: center;
			line-height: 50px;
			margin: 5px;
			float: left;
		}
	</style>
</head>
<body>

	<?php for($i = 0; $i < 10; $i++ ) { ?>
		
		<div><?php echo $numbers[$i]; ?></div>
	
	<?php } ?>

</body>
</html>