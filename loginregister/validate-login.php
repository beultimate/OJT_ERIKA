<?php

	include 'conn.php';

	if(isset($_POST['login'])) {
	
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	if(empty($email) || empty($password)) {
		echo "fields shall not be empty!";
	} 

	else {

    $query = "SELECT * FROM accounts WHERE email='$email' and password='$password'";
		$result = mysqli_query($conn, $query);
  	$rows = mysqli_num_rows($result);

		if(!$result) {
			echo "There is an error occured!";
		} else {
				if($rows != 1) {
					if(isset($_COOKIE['login'])){
						if($_COOKIE['login'] < 5){
							$attempts = $_COOKIE['login'] + 1;
							setcookie('login', $attempts, time()+30*10); 
						} 
						else{
							echo "You have had your 5 attempts. Try again after 5 minutes.";
						}
					} else {
						setcookie('login', 1, time()+30*10);
					}
					exit;
				}else{
					if($_COOKIE['login'] >=5){
						echo "You have had your 5 attempts. Try again after 5 minutes.";
					}else{
						session_start();
						$_SESSION['email'] = $email;
						http_response_code(201);
					}
					
				}
				
					

			}
		}
	}


?>