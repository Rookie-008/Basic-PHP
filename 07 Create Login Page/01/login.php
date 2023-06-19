<?php
// Check Submit Button
if( isset($_POST["submit"]) ) {
	// Check Username dan Passsword
if( $_POST["username"] == "admin" && $_POST["password"] == "123" ){
	// If Condition true, redirect to admin page
		header("Location: admin.php");
		exit;
	} else {	
	// If Condition False, Message EROR
		$eror = true;		
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

<h1>Login Page</h1>

<?php if( isset($eror) ) : ?>
	<p style="color: red; font-style: italic;">Username / Wrong Password!</p>
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