<?php
	session_start();
	
	if(isset($_SESSION['email'])) {
		header("Location: welcome.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login first!</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
	<form method="POST" id="frm-login" >

		<table>
			<th colspan="2">LOGIN</th>
			<tr>
				<td>Name: 
				</td>
				<td>
					<input type="text" id="email" name="email">
				</td>
			</tr>
			<tr>
				<td>
					Password:
				</td>
				<td>
					<input type="password" id="password" name="password">
				</td>
			</tr>			
			<tr>
				<td colspan="2">
					<input type="submit" id="btn-login" name="login" value="login">
				</td>
			</tr>
		</table>

		don't have an account? registered <a href="register.php">here</a>

	</form>

	<div id="demo"></div>

	<script>
		$(document).ready(function(){
			$("#frm-login").submit(function(event){
				event.preventDefault();
				var email = $("#email").val();
				var password = $("#password").val();
				var login = $("#btn-login").val();

				$.ajax({
					type: "POST",
					url: "validate-login.php",
					data: {
						email: email,
						password: password,
						login: login
					},
					success: function(data) {
						$("#demo").html(data);
					},
				    statusCode: {
				    201: function() {
				    	var url = "index.php";
						$(location).attr('href',url);
				   }
				}
			});
		});
	});
	</script>

</body>
</html>