<?php

include 'connectionstring.php';

//static variables 
$name = $_POST['name'];
$age = $_POST['age'];
$track = $_POST['track'];
$addBtn = $_POST['addBtn'];

//add
if(isset($addBtn)) {
	$res  = mysqli_query($conn,"INSERT INTO students (Name, Age, Track) VALUES ('$name', '$age', '$track')");
	if($res == true) {
		echo "success";
	} else {
		echo "not success";
	}
}

?>
