<!DOCTYPE html>
<html>
<head>
	<title>Get DEMO Tutorial AJAX PHP</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			$("button").click(function() {
				$.get("sample.txt", function(data, status){
					$("#demo").val(data);
				});
			});
		});
	</script>
</head>
<body>
	<input type="text" name="message" id="demo"></div><br>
	<button>click me</button>
</body>
</html>