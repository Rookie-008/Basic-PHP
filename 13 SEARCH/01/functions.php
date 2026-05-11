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


	// ADD Data
	function add($DATA) {

		global $connection;

		// Take Data From All Elemen In Form
		$id = htmlspecialchars($DATA["id"]);
		$nameProduct = htmlspecialchars($DATA["nameProduct"]);
		$idProduct = htmlspecialchars($DATA["idProduct"]);
		$cost = htmlspecialchars($DATA["cost"]);
		$image = htmlspecialchars($DATA["image"]);

		// query insert data
		$query = "INSERT INTO fruits VALUES ('$id','$nameProduct', '$idProduct', '$cost', '$image')";
		mysqli_query($connection, $query);

		return mysqli_affected_rows($connection);

	}


	// DELETE DATA
	function delete($ID) {
		global connection;

		mysqli_query($connection, "DELETE FROM fruits WHERE id = $ID");

		return mysqli_affected_rows($connection);
	}


	// UPDATE DATA
	function update($DATA) {

		global $connection;

		// Take Data From All Elemen In Form
		$id = $DATA["id"];
		$nameProduct = htmlspecialchars($DATA["nameProduct"]);
		$idProduct = htmlspecialchars($DATA["idProduct"]);
		$cost = htmlspecialchars($DATA["cost"]);
		$image = htmlspecialchars($DATA["image"]);

		// query insert data
		$query = "UPDATE fruits SET 
				id = '$id', 
				nameProduct = '$nameProduct', 
				idProduct = '$idProduct', 
				cost = '$cost', 
				image = '$image'
				WHERE id = $id;
			";

		mysqli_query($connection, $query);

		return mysqli_affected_rows($connection);

	}


	// SEARCH DATA
	function search($keyword) {
		$query = "SELECT * FROM fruits WHERE 
				nameProduct LIKE '%$keyword%' OR
				idProduct LIKE '%$keyword%' OR
				cost LIKE '%$keyword%'
			";

		return query($query);
	}

?>