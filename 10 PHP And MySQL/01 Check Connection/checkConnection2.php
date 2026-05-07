<?php  

	$host = "localhost";
	$username = "newuser";
	$password = "12345678";
	$db_name = "dataFruits";

	$connection = new mysqli($host, $username, $password, $db_name);

	if (!$connection) {
		echo "Database Not Connected";
	} else {
		echo "Connection Database Successfullyd";
	}

?>