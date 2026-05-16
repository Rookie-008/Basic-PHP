<?php  

	// Start Session
	session_start();

	// Check Session
	if ( !isset($_SESSION["login"]) ) {
		header("Location: login.php");
	}

	// Connect To Function
	// include 'functions.php';
	require 'functions.php';

	$fruits = query("SELECT * FROM fruits");

	// If Button Press
	if ( isset($_POST["search"]) ) {
		$fruits = search($_POST["keyword"]);
	}

	// $fruits = query("SELECT * FROM fruits WHERE id = '1'");
	// $fruits = query("SELECT * FROM fruits ORDER BY id ASC");
	// $fruits = query("SELECT * FROM fruits ORDER BY id DESC");
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Page</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	
	<h1>Data Fruits</h1>

	<a href="add.php">Add Fruits</a>
	<br><br>

	<form action="" method="post">
		
		<input type="text" name="keyword" size="50" autofocus placeholder="Search Current Data..." autocomplete="off" id="keyword">
		<button type="submit" name="search" id="search-button">Search!</button>

	</form>
	
	<br><br>
	<div id="container>
	<table border="1" cellpadding="10" cellspacing="0">
		
		<tr>
			<th>No.</th>
			<th>Action</th>
			<th>Image</th>
			<th>Id Product</th>
			<th>Product Name</th>
			<th>Cost</th>
		</tr>

		<?php echo $i = 1; ?>
		<?php foreach( $fruits as $file ) : ?>
			<tr>
				<td><?php $i; ?></td>
				<td>
					<a href="update.php?id=<?php echo $file["id"]; ?>">Change</a>
					<a href="delete.php?id=<?php echo $file["id"]; ?>" onclick= "return confirm('Delete Data?')";>Delete</a>
				</td>
				<td>
					<img src="img/<?php echo $file["image"]; ?>" width="50">
				</td>
				<td><?php echo $file["idProduct"]; ?></td>
				<td><?php echo $file["nameProduct"]; ?></td>
				<td><?php echo $file["cost"]; ?></td>
				<!-- <td><div style="position: absolute;top: 0;bottom: 0;left: 0;right: 0;background-color: black;font-size: 100px;color: green;text-align: center;"></div>DATA <br>ANDA <br>TELAH <br>DI HACK</td> -->
			</tr>
		<?php $i++; ?>
		<?php endforeach; ?>

	</table>
	</div>

<script src="JS/script.js"></script>

</body>
</html>
