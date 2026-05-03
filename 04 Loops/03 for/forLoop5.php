<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>forLoop</title>
	<style>
		.color {

		}
	</style>
</head>
<body>

	<table border="4" cellpadding="20" cellspacing="1">
		<?php for($i = 1; $i <= 4; $i++) : ?>
			<?php if($i % 2 == 0) : ?>
				<tr class="color">					
			<?php else : ?>
				<tr>
			<?php endif; ?>
				<?php for($j = 1; $j <= 4; $j++) : ?>
					<td><?= "$i, $j" ?></td>
				<?php endfor; ?>
			</tr>
		<?php endfor; ?>
	</table>

</body>
</html>