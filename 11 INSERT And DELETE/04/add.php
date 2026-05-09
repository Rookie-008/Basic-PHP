<?php 
	// Connect To DBMS
	$connection = mysqli_connect("localhost", "newuser", "12345678", "dataFuits");

	// Check Button Already Press Or Not
	if( isset($_POST["submit"]) ) {
		// var_dump($_POST);
			
		// Check Data Success Insert Or Not
		if ( add($_POST) > 0 ) {
			echo "
				<script>
					alert('Data Successfully Inserted!');
					document.location.href = 'insertAndDelete3.php';
				</script>
			";
		} else {
			echo "
				<script>
					alert('ERROR!! Data Not Inserted!');
					document.location.href = 'insertAndDelete3.php';
				</script>
			";
		}
	
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Fruits</title>
</head>
<body>

	<h1>Add Fruits</h1>

	<form action="" method="post">
		
		<ul>
			<li>
				<label for="id">No : </label>
				<input type="text" name="id" id="id">
			</li>
			
			<li>
				<label for="nameProduct">Name Product : </label>
				<input type="text" name="nameProduct" id="nameProduct" required>
			</li>

			<li>
				<label for="idProduct">ID Product : </label>
				<input type="text" name="idProduct" id="idProduct" required>
			</li>

			<li>
				<label for="cost">Cost : </label>
				<input type="text" name="cost" id="cost">
			</li>

			<li>
				<label for="image">Image : </label>
				<input type="text" name="image" id="image">
			</li>

			<li>
				<button type="submit" name="submit">Add Data!</button>
			</li>
		</ul>

	</form>

</body>
</html>