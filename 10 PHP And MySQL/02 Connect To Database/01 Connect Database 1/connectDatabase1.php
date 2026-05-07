<?php  
// Connect To Database
$connection = mysqli_connect("localhost", "newuser", "12345678", "dataFruits");

// Take data from table fruits / query data fruits
$result = mysqli_query($connection, "SELECT * FROM fruits");
// echo $result;
// var_dump($result);

// Check Database And Tables Connection
// if ( !result ) {
// 	echo mysqli_error($connection);
// } else 

// Take Data (fetch) Fruits from object result
// 4 STEP TO TAKE DATA FROM OBJECT RESULT
// 1. mysqli_fetch_row();
// $fruits = mysqli_fetch_row($result); // return Array Numerik
// var_dump($fruits); 
// var_dump($fruits[1]);
// var_dump($fruits[3]);

// 2. mysqli_fetch_assoc();
// $fruits = mysqli_fetch_assoc($result); // return Array Associative
// var_dump($fruits);
// var_dump($fruits["nameProduct"]);

// 3. mysqli_fetch_array();
// $fruits = mysqli_fetch_array($result); // return Array Numerik And Associative
// var_dump($fruits);
// var_dump($fruits["nameProduct"]);
// var_dump($fruits[1]);

// 4. mysqli_fetch_object();
// $fruits = mysqli_fetch_object($result); // return Array Object
// var_dump($fruits);
// var_dump($fruits["nameProduct"]); // ERROR
// var_dump($fruits->nameProduct);


// Take Data Use Array Associative --> mysqli_fetch_assoc();
// while ( $fruits = mysqli_fetch_assoc($result) ) { 
// 	// var_dump($fruits["nameProduct"]);
// 	var_dump($fruits);
// }



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Page</title>
</head>
<body>

	<h1>Fruits</h1>

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
		<?php while( $file = mysqli_fetch_assoc($result) ) : ?>
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
		<?php endwhile; ?>

	</table>

</body>
</html>