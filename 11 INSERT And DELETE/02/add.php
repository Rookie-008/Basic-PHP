<?php 
	// Connect To DBMS
	$connection = mysqli_connect("localhost", "newuser", "12345678", "dataFuits");

	// Check Button Already Press Or Not
	if( isset($_POST["submit"]) ) {
		// var_dump($_POST);
		// Take Data From All Elemen In Form
		$id = $_POST["id"];
		$nameProduct = $_POST["nameProduct"];
		$idProduct = $_POST["idProduct"];
		$cost = $_POST["cost"];
		$image = $_POST["image"];

		// query insert data
		$query = "INSERT INTO fruits VALUES ('$id','$nameProduct', '$idProduct', '$cost', '$image')";
		mysqli_query($connection, $query);

		// Check Data Success Insert Or Not
		// var_dump(mysqli_affected_rows());

		if ( mysqli_affected_rows($connection) > 0 ) {
			echo "Data Successfully Inserted";
		} else {
			echo "Data Not Inserted";
			echo "<br>";
			echo mysqli_error($connection);
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