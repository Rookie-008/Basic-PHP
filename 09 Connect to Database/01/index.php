<?php
require 'function.php';

$database = query("SELECT * FROM formula"); // <--  formula ==> Table NAME
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
<?php foreach( $database as $file ) : ?>	
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
<?php endforeach; ?>
</table>

</body>

</html>
