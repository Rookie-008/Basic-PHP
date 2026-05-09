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

?>