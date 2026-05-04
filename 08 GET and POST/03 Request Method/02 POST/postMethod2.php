<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>POST</title>
</head>
<body>
	<?php if( isset($_POST["submit"])) : ?>
		<h1>HELLO, <?= $_POST["name"]; ?> WELCOME BACK!!</h1>
	<?php endif; ?>

	<form action="" method="post">
		Insert Name :
		<input type="text" name="name">
		<br>
		<button type="submit" name="submit">Send!</button>
	</form>

</body>
</html>
