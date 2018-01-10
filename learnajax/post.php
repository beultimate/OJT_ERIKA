<!DOCTYPE html>
<html>
<head>
	<title>Post DEMO Tutorial AJAX PHP</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>

		$(document).ready(function(){
			$("input").keyup(function(){
				var name = $("input").val();
				$.post("suggestions.php", {
					inputName: name
					}, function(data, status) {
							$("div").html(data);
				});
			});
		});

	</script>
</head>
<body>

	<input type="text" name="name"></input>
	<div></div>

</body>
</html>