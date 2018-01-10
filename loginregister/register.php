<?php

	session_start();
	
	if(isset($_SESSION['email'])) {
		header("Location: welcome.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<form method="POST" id="frm-register">

	<table>
		<th colspan="2">REGISTER</th>
		<tr>
			<td>Username: </td>
			<td><input type="text" name="username" id="username"></td>
		</tr>
		<tr>
			<td>Email: </td>
			<td><input type="text" name="email" id="email"></td>
		</tr>
		<tr>
			<td>Password: </td>
			<td><input type="password" name="password" id="password"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="register" id="register" value="Register"></td>
		</tr>
	</table>

	already have an account? login <a href="login.php">here</a>

</form>

<div id="demo"></div>

	<script>
		$(document).ready(function(){
			$("#frm-register").submit(function(event){
				event.preventDefault();
				var username = $("#username").val();
				var email = $("#email").val();
				var password = $("#password").val();
				var register = $("#register").val();

				$.ajax({
					type: "POST",
					url: "validate-register.php",
					data: {
						username: username,
						email: email,
						password: password,
						register: register
					},
					success: function(data) {
						$("#demo").html(data);
					},
				  
				  statusCode: {
				    201: function() {
				    	var url = "login.php";
							$(location).attr('href',url);
				    },

				   	400: function() {
				       alert("It's not you, it's us. We'll work it out.");
				   		}
						}	
					});
			});
		});
	</script>
	
</body>
</html>