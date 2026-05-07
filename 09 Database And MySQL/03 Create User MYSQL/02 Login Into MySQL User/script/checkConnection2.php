<?php  

	$host = "localhost";
	$username = "nameUser";
	$password = "abcd1234";
	$db_name = "newdata";

	$connection = new mysqli($host, $username, $password, $db_name);

	if (!$connection) {
		echo "Database Not Connected";
	} else {
		echo "Connection Database Successfullyd";
	}

?>