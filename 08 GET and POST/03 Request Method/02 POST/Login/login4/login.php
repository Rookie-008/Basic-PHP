<?php  
// Check Submit Button Already Press or not 
if ( isset($_POST["submit"])) {

	// Check Username And Password
	if( $_POST["username"] == "admin" && $_POST["password"] == "12345") {

	// If True, redirect to Admin Page
		header("Location: admin.php");
		exit;
	} else {
	// If False, Show Error Message
		$error = true;
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>

	<h1>Login Admin</h1>

	<?php if( isset($error) ) : ?>
		<p style="color: red; font-style: italic;">wrong username or password!!</p>
	<?php endif; ?>

	<ul>
	<form action="" method="post">
		
		<li>
			<label for="username">Username : </label>
			<input type="text" name="username" id="username">
		</li>	
		<li>
			<label for="password">Password : </label>
			<input type="password" name="password" id="password">
		</li>
		<li>
			<button type="submit" name="submit">Login</button>
		</li>

	</form>
	</ul>

</body>
</html>