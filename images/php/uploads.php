<?php 

include 'connectionstring.php';

if(isset($_POST['submit'])) {

	$name =  $_FILES['file']['name'];
	$type = $_FILES['file']['type'];
	$size = $_FILES['file']['size'];
	$max_size = 500000;
	$tmp_name = $_FILES['file']['tmp_name'];
	$file_loc = 'uploads/' . $name;
	
	$extension = array(
	        'image/jpeg',
	        'image/jpg',
	        'image/gif',
	        'image/png'
	    );

	$error = false;


	if (isset($name)) {
		if(!empty($name)) {
			if(!in_array($type, $extension)) {
				echo "<script>alert('It only supports file extensions: jpeg, jpg, gif and png and only real images are supported.')</script>";
			}

			else {

				if($size >= $max_size) {
					echo "<script>alert('Image size should not exceed 500kb')</script>";
					$error = true;
				} 

				if (file_exists($file_loc)) {
				    echo "<script>alert('Sorry, file already exists.')</script>";
					$error = true;
				}

				if ($error == false) {
					$res  = mysqli_query($conn,"INSERT INTO images (images) VALUES ('$file_loc')");
					if($res == true) {
						$movefile = move_uploaded_file($tmp_name, $file_loc);
						echo "<script>alert('uploaded successfully!')</script>";
					} else {
						echo "<script>alert('erroooorrrrrrrrrr')</script>";
					}
				}
			}
		}
	}

}





/*if(isset($name)) {
	if(!empty($name)) {
		if (in_array($type, $extension) && $size > $max_size) {
			$location = 'uploads/';
			if (move_uploaded_file($tmp_name, $location.$name)) {
				echo "<script>alert('uploaded successfully!')</script>";
			}
			else {
				echo "<script>alert('uploaded failed')</script>";
			}
		}
		else {
			echo "<script>alert('file extension not supported')</script>";
		}
	} else {
		echo "<script>alert('choose a file to be uploaded')</script>";
	}
} else {
	
}*/


?>