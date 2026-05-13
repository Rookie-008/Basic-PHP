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
		

		// Upload Image
		$image = upload();
		if ( !$image ) {
			return false;
		}


		// query insert data
		$query = "INSERT INTO fruits VALUES ('$id','$nameProduct', '$idProduct', '$cost', '$image')";
		mysqli_query($connection, $query);

		return mysqli_affected_rows($connection);

	}



	// UPLOAD IMAGE
	function upload() {
		// return false;
		$fileName = $_FILES['image']['name'];
		$fileSize = $_FILES['image']['size'];
		$error = $_FILES['image']['error'];
		$tmpName = $_FILES['image']['tmp_name'];

		// Check Already Have Image Or Not
		if ( $error === 4 ) {
			echo "<script>
					alert('Choose Image First');
				  </script>
				";
			return false;
		}


		// Check Data Upload It's Image Or Not
		$extentionValidImage = ['jpg', 'jpeg', 'png'];
		$extentionImage = explode('.', $fileName);
		$extentionImage = strtolower(end($extentionImage));
		if ( !in_array($extentionImage, $extentionValidImage) ) {
			echo "<script>
					alert('File Is Not Image. Please Upload Image!!!');
				  </script>
				";
			return false;
		}


		// Check Image Size
		if ( $fileSize > 1000000 ) {
			echo "<script>
					alert('Image File To Big. Please Upload Another Image!!!');
				  </script>
				";
			return false;
		}


		// Check Name And Size Valid. Image Ready To Upload
		// generate new picture name
		$newFileName = uniqid();
		$newFileName .= '.';
		$newFileName .= $extentionImage;
		// var_dump($newFileName); die;


		move_uploaded_file($tmpName, 'img/' . $newFileName);

		return $newFileName;

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
		$oldImage = htmlspecialchars($DATA["oldImage"]);
		

		// Check User Add New Picture Or Not
		if ( $_FILES['image']['error'] === 4 ) {
			$image = $oldImage;
		} else {
			$image = upload();
		}
		

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



	// REGISTRASI DATA
	function registrasi($DATA) {
		global $connection;

		$id = $DATA["id"];
		$username = strtolower(stripslashes($DATA["username"]));
		$password = mysqli_real_escape_string($connection, $DATA["password"]);
		$confirmPassword = mysqli_real_escape_string($connection, $DATA["confirmPassword"]);


		// Check Username Already Created Or Not
		$result = mysqli_query($connection, "SELECT username FROM costumer WHERE username = '$username'");

		if( mysqli_fetch_assoc($result) ) {
			echo "<script>
					alert('ERROR!! Username Already Created.. Created User With Another Name');
				  </script>
			";

			return false;
		}


		// Check Password Confirmation
		if ( $password !== $confirmPassword ) {
			echo "<script>
					alert('ERROR!! Password Not Compatible');
				  </script>
				";
			return false;

		}
		// return 1;

		// Enkripsi Password 
		// $password = md5($password);
		$password = password_hash($password, PASSWORD_DEFAULT);
		// var_dump($password); die;

		// Insert New User To Database
		mysqli_query($connection, "INSERT INTO user VALUES('$id', '$username', '$password')");

		return mysqli_affected_rows($connection);
	}

?>