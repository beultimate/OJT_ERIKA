<!DOCTYPE html>
<html>
<head>
	<title>Displaying Images</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>	

<div class="row" style="min-height: 100%; height:auto;">

	<div class="col-lg-4 bg-primary text-light">
		<div id="side-part" class="container">
			<img src="minions.gif" width="300px" class="img-fluid">
			<h1 class="display-2"> Gallery Hub </h1>	
			<h2> Start uploading your images! </h2>	
			
			<form id="upload" method="POST" enctype="multipart/form-data">
				<div class="form-group">
				    <input type="file" name="file" id="file" class="form-control-file" >
					<button type="submit" id="submit" class="btn btn-dark" name="submit">Submit</button>
			  	</div>
			</form>

			<ul>
				<li>Max upload size: 500kb</li>
				<li>Image file types support: JPEG, JPG, GIF, PNG</li>
				<li>Only real images are supported.</li>
			</ul>
		</div>
	</div>

	<div class="col-lg-8 bg-light" id="pictures-part" style="">
	</div>

</div>

<?php include 'php/uploads.php' ?>

<script>
	$(document).ready(function(){
		$("#pictures-part").load("php/display.php");	
	});
</script>
</body>
</html>