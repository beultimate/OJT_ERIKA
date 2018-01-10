<?php 

	//connection string

	$servername = "localhost";
	$username = "root";
	$password = "ast3dial";
	$dbname = "erikaDB";

	$conn = mysqli_connect($servername, $username, $password, $dbname);


	//check the connection

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	} 

	//auto-generated id
	mysqli_insert_id($conn);
		
?>