<?php  
	
	// sleep(1);  // 1 Seconds
	// usleep(1000000);  // 1 seconds

	require '../functions.php';

	$keyword = $_GET["keyword"];
	
	
	$query =  "SELECT * FROM fruits WHERE 
				nameProduct LIKE '%$keyword%' OR
				idProduct LIKE '%$keyword%' OR
				cost LIKE '%$keyword%'
			";
	$fruits = query($query);

	// var_dump($fruits);

?>

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