<?php

include 'connectionstring.php';

//static variables 
$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$track = $_POST['track'];
$editBtn = $_POST['editBtn'];

//edit
if(isset($_POST['editBtn'])) {
	$res = mysqli_query($conn, "UPDATE students set Name='$_POST[name]', Age='$_POST[age]', Track='$_POST[track]' where ID='$_POST[id]'");

	if ($res === TRUE) {
		echo "success";
	}
	else {
		echo "not success";
		}
	}

?>
