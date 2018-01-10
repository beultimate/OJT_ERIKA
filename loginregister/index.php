<?php

	session_start();
	if(!isset($_SESSION['email'])) {
		header("Location: login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<h2> Hello it's working! </h2>
		<a href="logout.php">Logout?</a>
</body>
</html>