<?php
// Connection to Database
// mysqli_connect("Host Name", "Username MySQL", "Password", "Database Name");  <-- Parameter
$db_connect = mysqli_connect("localhost", "root", "12345", "db_name");  // <-- Save Connection into variabel (NB: $db_conn, $connection, $link).
//$db_connect = mysqli_connect("localhost", "root", "836967826984", "db_name");
//$db_connect = mysqli_connect("localhost", "root", "7085787589", "db_name");
//$db_connect = mysqli_connect("localhost", "root", "7889778072", "db_name");

// Take data from table / query
// mysqli_query("Connection to Database",); <-- Parameter
$result = mysqli_query($db_connect, "SELECT * FROM formula");


// Check Data already created or not / Check EROR
// 1.
// var_dump($result);   // result value true/false

// 2.
//if( !$result ) {
//	echo mysqli_eror($db_conn);
//}

// Take data (Fetch) formula from result object.
// 4 method to take data from result object.

// 1. mysqli_fetch_row();    --> Return Numeric Array 
//$file = mysqli_fetch_row($result);
//var_dump ($file[4]);

// 2. mysqli_fetch_assoc();  --> Return Associatif Array
//$file = mysqli_fetch_assoc($result);
//var_dump ($file);

// 3. mysqli_fetch_array();  --> Return Both
//$file = mysqli_fetch_array($result);
//var_dump ($file);

// 4. mysqli_fetch_object();
//file = mysqli_fetch_object($result);
//var_dump ($file->name);

//while ( $file = mysqli_fetch_assoc($result) ) {
//	var_dump ($file);
//}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Not Everyday Is Good, But There Is Something Good In Everyday</title>
</head>
<body>

<h1>List Formula</h1>

<table border="1" cellpadding="10" cellspacing="0">

	<tr>
		<th>No.</th>
		<th>Picture</th>
		<th>Name</th>
		<th>Formula</th>
	</tr>
<?php echo $i = 1; ?>
<?php while( $file = mysqli_fetch_assoc($result) ) : ?>	
	<tr>
		<td><?php echo $i;?></td>
		<td>
			<a href="">Change</a> | <a href="">Delete</a>
		</td>
		<td><img src="img/<?php echo $file["picture"];?>" width="50"></td>
		<td><?php echo $file["name"];?></td>
		<td><?php echo $file["formula"];?></td>
	</tr>
<?php $i++; ?>
<?php endwhile; ?>
</table>

</body>

</html>



