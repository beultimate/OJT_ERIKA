<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<form method="POST">

	<table>
		<tr><th colspan="2" style="padding: 10px;">Student Information</th></tr>
		<tr>
			<td>ID:</td>
		<td><input type="text" name="id" id="id"></td>
		</tr>
		<tr>
			<td>Name: </td>
			<td><input type="text" placeholder="ex. juan dela cruz" name="name" id="name"></td>
		</tr>
		<tr>
			<td>Age:</td>
			<td><input type="text" placeholder="100 years old" name="age" id="age"></td>
		</tr>
		<tr>
			<td>Track: </td>
			<td><input type="text" placeholder="ex. ITMAWE" name="track" id="track"></td>
		</tr>
		<tr>
			<td colspan="2">
				<div  style="margin: 25px auto 0; width:90%">
					<input type="submit" value="INSERT" name="addBtn" id="addBtn">
					<input type="submit" value="UPDATE" name="editBtn" id="editBtn">
					<input type="submit" value="DELETE" name="delBtn" id="delBtn">
				</div>
			</td>
		</tr>
	</table>

</form>

	<!--display the data-->
<div id="demo"></div>
<script src="js/script.js"></script>

</body>
</html>