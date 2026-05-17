<?php  
	// Start Session
	session_start();

	// Check Session
	if ( !isset($_SESSION["login"]) ) {
		header("Location: login.php");
	}

	// Connect To Function
	require 'functions.php';

	$ID = $_GET["id"];

	if ( delete($ID) > 0 ) {
		echo "
			<script>
				alert('Delete Data Successfully!!');
				document.location.href = 'insertAndDelete.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('ERROR!! CANNOT DELETE DATA');
				document.location.href = 'insertAndDelete.php';
			</script>
		";
	}

?>