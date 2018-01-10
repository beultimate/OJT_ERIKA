<?php
	include 'php/conn.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Show Comments Tutorial AJAX PHP</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>

		$("document").ready(function() {
			var commentCount = 2;
			$("#btnLoad").click(function() {
				commentCount = commentCount + 2;
				$("#demo").load("php/load-comments.php", {
					commentNewCount: commentCount
				})
			})
		});

	</script>
</head>
<body>

<div id="demo">
	<?php

		$sql = "SELECT * FROM comments LIMIT 2";
		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				echo "<p>";
				echo $row['author'];
				echo "<br>";
				echo $row['message'];
				echo "</p>";
			}
		}	else {
			echo "there's no comment to show";
		}
	?>

</div>

<button id="btnLoad"> show more comments </button>

</body>
</html>