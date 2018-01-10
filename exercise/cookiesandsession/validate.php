<?php

	//the email and password (not from the database)
	$myemail = "summerfreniere@gmail.com";
	$mypass = "1234";

	if(isset($_POST['login'])) {
		$email = $_POST['email'];
		$pass = $_POST['password'];
			if ($email == $myemail && $pass == $mypass) {
				if(isset($_POST['btnRemember'])) {
					setcookie("email", $email, time() + (86400 * 30));
				}	
					session_start();
					$_SESSION['email'] = $email;
					$_SESSION['password'] = $pass;
					header("Location: welcome.php");
			} 
			else {
					header("Location: index.php");
			}
	} 
	elseif (isset($_POST['logout'])) {
					session_start();
					session_destroy();
					header("Location: index.php");
	}
	else {	
				echo "there's a problem";
	}


?>