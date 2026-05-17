<?php 
	
	// Connect To Function
	require 'functions.php';
	

	// Check Button Press
	if ( isset($_POST["register"]) ) {

		if( registrasi($_POST) > 0 ) {
			echo "
				<script>
					alert('New Costumer Successfully Created!!');
				</script>
			";
		} else {
			echo mysqli_error($connection);
		}
	}
	

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registrasi Page</title>

	<style>
		label {
			display: block;
		}

	</style>

</head>
<body>

	<h1>REGISTRASI PAGE</h1>

	<form action="" method="post">
		
		<ul>
			<li>
				<label for="id">No : </label>
				<input type="text" name="id" id="id">
			</li>
			
			<li>
				<label for="username">Username : </label>
				<input type="text" name="username" id="username">
			</li>

			<li>
				<label for="password">Password : </label>
				<input type="password" name="password" id="password">
			</li>

			<li>
				<label for="confirmPassword">Konfirmasi Password : </label>
				<input type="password" name="confirmPassword" id="confirmPassword">
			</li>

			<li>
				<button type="submit" name="register">Register!!</button>
			</li>
		</ul>

	</form>

</body>
</html>