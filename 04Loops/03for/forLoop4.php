<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>forLoop</title>
</head>
<body>

	<table border="4" cellpadding="20" cellspacing="1">
		<?php  
			for($i = 1; $i <= 3; $i++){
				echo "<tr>";
				for ($j = 1; $j <= 5; $j++){
					echo "<td>$i, $j</td>";
				}
				echo "</tr>";
			}
		?>
	</table>

</body>
</html>