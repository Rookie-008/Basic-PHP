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
	<h1>Hello, <?php echo $_POST["username"]; ?> Welcome Back!!</h1>
	<h2>Not Everyday Is Good, But There Is Something Good In Everyday</h2>
<?php endif; ?>

<form action="" method="post">
	Input Name :
	<input type="text" name="username">
	<br>
	<button type="accept" name="accept">Send</button>
</form>

</body>
</html>