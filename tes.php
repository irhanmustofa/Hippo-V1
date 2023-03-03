<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>uuuuu</title>
</head>
<body>
	<form method="post">
		<input type="" name="data">

		<button type="submit" name="submit">submit</button>
	</form>
</body>
</html>

<?php 
if (isset($_POST["submit"])) {
	$data = $_POST['data'];
	if ($data == '1') {
			echo "laki";
		}else{
			echo "pw";
		}	
}

 ?>