<?php  

	// Connect To Functions
	require 'functions.php';

	// Check Button
	if ( iset($_POST["login"]) ) {

		$username = $_POST["username"];
		$password = $_POST["password"];

		$result = mysqli_query($connection, "SELECT * FROM costumer WHERE username = '$username'");

		// Check Username
		if ( mysqli_num_rows($result) === 1 ) {
			// Check Password
			$checkPassword = mysqli_fetch_assoc($result);
			if ( password_verify($password, $checkPassword["password"]) ) {
				header("Location: insertAndDelete.php");
				exit;
			}
		}

		$error = true;

	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
</head>
<body>

	<h1>LOGIN PAGE</h1>

	<?php if( isset($error) ) : ?>
		<p style="color: red; font-style: italic;">wrong username / password</p>
	<?php endif;  ?>

	<form action="" method="post">
		<ul>
			<li>
				<label for="username">Username : </label>
				<input type="text" name="username" id="username">
			</li>

			<li>
				<label for="password">Password : </label>
				<input type="password" name="password" id="password">
			</li>

			<li>
				<button type="submit" name="login">Login!!</button>
			</li>
		</ul>
	</form>

</body>
</html>