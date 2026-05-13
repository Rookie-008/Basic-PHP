<?php 
	// Connect To Functions
	require 'functions.php';

	// Take Data From URL
	$id = $_GET["id"];
	// var_dump($id);

	// Query Data Fruits From ID
	$file = query("SELECT * FROM fruits WHERE id = $id")[0];
	// var_dump($file);
	// var_dump($file[0]["nameProduct"]);

	// Check Button Already Press Or Not
	if( isset($_POST["submit"]) ) {
		// var_dump($_POST);
			
		// Check Data Success Update Or Not
		if ( update($_POST) > 0 ) {
			echo "
				<script>
					alert('Data Successfully Updated!');
					document.location.href = 'insertAndDelete.php';
				</script>
			";
		} else {
			echo "
				<script>
					alert('ERROR!! Data Cannot Updated!');
					document.location.href = 'insertAndDelete.php';
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
	<title>Update Fruits</title>
</head>
<body>

	<h1>Update Data Fruits</h1>

	<form action="" method="post">
		
		<ul>
			<input type="hidden" name="id" value="<?php echo $file["id"]; ?>">
			<input type="hidden" name="oldImage" value="<?php echo $file["image"]; ?>">
			
			<li>
				<label for="nameProduct">Name Product : </label>
				<input type="text" name="nameProduct" id="nameProduct" required value="<?php echo $file["nameProduct"];  ?>">
			</li>

			<li>
				<label for="idProduct">ID Product : </label>
				<input type="text" name="idProduct" id="idProduct" required value="<?php echo $file["idProduct"];  ?>">
			</li>

			<li>
				<label for="cost">Cost : </label>
				<input type="text" name="cost" id="cost" value="<?php echo $file["cost"];  ?>">
			</li>

			<li>
				<label for="image">Image : </label> <br>
				<img src="img/<?php echo $file['image']; ?>" width="100"> <br>
				<input type="file" name="image" id="image">
			</li>

			<li>
				<button type="submit" name="submit">Add Data!</button>
			</li>
		</ul>

	</form>

</body>
</html>