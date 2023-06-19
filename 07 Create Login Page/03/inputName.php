<?php

// Form ==> 2 Method to Create Form --> GET dan POST
// URL  ==> Use 1 Method --> GET

// Use POST if Create a Login Page, Username and Password didnt Show on URL
// Use GET, Username and Password Show on URL --> <form action="" method=""> (NO EROR, even we dont give a value to the 2 attribut, but attribut will save default value)

// $_POST

?>

<!DOCTYPE html>
<html>
<head>
	<title>POST</title>
</head>
<body>

<form action="loginPage.php" method="post">
	Masukkan Nama :
	<input type="text" name="username">
	<br>
	<button type="accept" name="accept">Send</button>
</form>

</body>
</html>