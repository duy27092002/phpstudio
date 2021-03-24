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
			$_SESSION['Name'] = $_POST['name'];
			$_SESSION['Birthday'] = $_POST['birthday'];
		}
	?>
	<form action="practice1_home.php" method="POST">
		<input type="submit" value="Next">
	</form>
</body>
</html>