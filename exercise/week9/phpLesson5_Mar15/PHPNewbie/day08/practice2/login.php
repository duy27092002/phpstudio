<!DOCTYPE html>
<html>
<head>
	<title>Session</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			session_start();
			$_SESSION['Username'] = $_POST['username'];
			$_SESSION['Password'] = $_POST['password'];
		}
	?>
	<form action="checkLogin.php" method="POST">
		<input type="submit" name="next" value="Next">
	</form>
</body>
</html>
