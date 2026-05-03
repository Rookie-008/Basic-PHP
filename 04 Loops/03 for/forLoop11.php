<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>forLoop</title>
	<style>
		.color {
			background-color : skyblue;
		}
	</style>
</head>
<body>

	<table border="4" cellpadding="20" cellspacing="1">
		<?php for($i = 1; $i <= 32; $i++) : ?>
			<?php if($i % 2 == 0) : ?>
				<tr class="color">					
			<?php else : ?>
				<tr>
			<?php endif; ?>
				<?php for($j = 1; $j <= 32; $j++) : ?>
					<td><?= "$i, $j" ?></td>
				<?php endfor; ?>
			</tr>
		<?php endfor; ?>
	</table>

</body>
</html>
