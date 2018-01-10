<?php

include 'connectionstring.php';

//static variables 
$id = $_POST['id'];
$delBtn = $_POST['delBtn'];

//delete
if(isset($delBtn)) {
	$res = mysqli_query($conn, "DELETE from students where ID='$id'");

	if ($res === TRUE) {
		echo "success";
	}
	else {
		echo "not success";
		}
	}

?>
