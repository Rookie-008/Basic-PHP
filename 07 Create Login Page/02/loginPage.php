<?php
// Send Data to the Same Page.
// Look at -->  <form action="" method="post">

?>

<!DOCTYPE html>
<html>
<head>
	<title>POST</title>
</head>
<body>

<?php if( isset($_POST["accept"]) ) : ?>
	<h1>Hello Hello, <?php echo $_POST["username"]; ?></h1>
<?php endif; ?>

<form action="" method="post">
	Input Name :
	<input type="text" name="username">
	<br>
	<button type="accept" name="accept">Send</button>
</form>

</body>
</html>