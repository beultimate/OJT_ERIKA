<?php

	session_start();
	
	if(isset($_SESSION['email'])) {
		header("Location: welcome.php");
	}

	if(isset($_COOKIE['email'])) {
		$cookieEmail = $_COOKIE['email'];
	}

?>


<!DOCTYPE html>
<html>
<head>
	<!--ajax jquery-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

	<h2> cookies and session </h2>

  <h1 class="text-center">Welcome back!</h1>

	<form method="post" action="validate.php">
	<table>
	<tr>
		<td>Email: </td>
		<td><input type="text" placeholder="Email" name="email" id="login-email"></td>
	</tr>
	<tr>
		<td>Password: </td>
		<td><input type="password" placeholder="Password" name="password" id="login-pass"></td>
	</tr>
	<tr>
		<td colspan="2"><input type="checkbox" name="btnRemember">Remember me</td>
	</tr>	
	<tr>
		<td colspan="2"><button type="submit" name="login">Login</button></td>
	</tr>
	</table>


<!--my cookie remember me script-->
<script>
	$(document).ready(function(){
		$("#login-email").val("<?php echo $cookieEmail ?>");
	});
</script>

</body>
</html>