<?php //displaying data

include 'connectionstring.php';

$sql = "SELECT * FROM images";
$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	 while($row = mysqli_fetch_array($result)) {
		echo "";?> <img src="<?php echo $row["images"];?>" class="img-fluid img-thumbnail" width="300px"><?php echo "";
	  }
	} else {
	  echo "0 results";
	}

?>