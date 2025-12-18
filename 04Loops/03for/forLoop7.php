<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>forLoop</title>
	<style>
		.color {
			background-color: skyblue;
		}
		.table {
			padding: 20px;
		}
	</style>
</head>
<body>

	<table class="table" cellpadding="10">
		<?php for($i = 1; $i <= 20; $i++) : ?>
			<tr class="color">
				<?php for($j = 1; $j <= 20; $j++) : ?>
					<td><?= "$i, $j" ?></td>
				<?php endfor; ?>
			</tr>
		<?php endfor; ?>
	</table>

</body>
</html>
