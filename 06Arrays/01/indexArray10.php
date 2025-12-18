<?php  

$Bombon = [["Bombon Jahe", "5"],[" Bombon Keju","15"],["Bombon Susu","25"],["Bombon Pedis","35"],["Bombon Asam","45"],["Bombon Cokelat","55"],["Bombon Kacamata","65"],["Bombon Karet","75"],["Bombon CupCup Pop","85"],["Bombon Buah","95"]];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Flavors</title>
</head>
<body>

<h1>Array Numerik</h1>

<?php foreach ($Manisan as $Bombon) : ?>

<ul>
	<li>Name : <?php echo $Bombon[5]; ?></li>
	<li>Id 	 : <?php echo $Bombon[8]; ?></li>
</ul>

<?php endforeach; ?>

</body>
</html>
