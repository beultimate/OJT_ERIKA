<?php

include 'conn.php';

if(isset($_POST['register'])) {

	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	if(empty($username) || empty($email) || empty($password)) {
		echo "textfields should not be empty!!!";
	} 

	elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "email is invalid!";
	} 

	else {
    $query = "SELECT * FROM accounts WHERE email='$email' or username='$username'";
		$result = mysqli_query($conn, $query);
  	$rows = mysqli_num_rows($result);

		if($rows > 0){
			echo "Email/Username is taken!";
		}
		else {
			$query = "INSERT INTO accounts (username, email, password) VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $query);

			if($result == true) {
    			http_response_code(201);
					echo "Successfully registered!";

			} else {
    			http_response_code(400);
			}
		}
	}
}

?>