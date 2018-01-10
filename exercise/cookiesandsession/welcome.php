<?php

	session_start();
	if(!isset($_SESSION['email'])) {
		header("Location: index.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1> WELCOME TO OUR PAGE!</h1>
	<form action="validate.php" method="post"><button type="submit" name="logout">logout</button></form>
</body>
</html>