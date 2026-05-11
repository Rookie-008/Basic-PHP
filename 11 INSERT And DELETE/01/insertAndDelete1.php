<?php  

	// Connect To Database
	$connection = mysqli_connect("localhost", "newuser", "12345678", "dataFruits");

	function query($query) {
		global $connection;

		$result = mysqli_query($connection, $query);
		$data = [];
		while ( $data = mysqli_fetch_assoc($result) ) {
			$data[] = $file;
		}
		return $data;
	}

	
	$fruits = query("SELECT * FROM fruits");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Page</title>
</head>
<body>

	<h1>Data Fruits</h1>

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
					<a href="">Change</a>
					<a href="">Delete</a>
				</td>
				<td>
					<img src="img/<?php echo $file["image"]; ?>" width="50">
				</td>
				<td><?php echo $file["idProduct"]; ?></td>
				<td><?php echo $file["nameProduct"]; ?></td>
				<td><?php echo $file["cost"]; ?></td>
			</tr>
		<?php $i++; ?>
		<?php endforeach; ?>

	</table>

</body>
</html>
