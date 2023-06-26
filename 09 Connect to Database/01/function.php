<?php
// Connection to Database
// mysqli_connect("Host Name", "Username MySQL", "Password", "Database Name");
$db_connect = mysqli_connect("localhost", "root", "12345", "db_name");  

function query($query) {
	global $db_connect;
	$result = mysqli_query($db_connect, $query);
	$data = [];
	while( $file = mysqli_fetch_assoc($result) ) {
		$data[] = $file;
	}
	return $data;
}
?>