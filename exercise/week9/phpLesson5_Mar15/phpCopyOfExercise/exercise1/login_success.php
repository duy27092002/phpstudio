
<!DOCTYPE html>
<html>
<head>
	<title>Login success</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../front-end_framework/bootstrap.min.css">
</head>
<body>
	<?php
		session_start();
		if ($_SESSION['login'] != 1) {
			echo "<h2 class=\"text-danger text-center\">Cần đăng nhập để thực hiện chức năng này</h2>";
			header('Refresh:5; url=index.php', true, 303);
		} else {
			echo "<h1>Welcome, <strong class=\"text-danger\">camnh</strong></h1>";
			echo "<br><form action=\"logout.php\" method=\"post\" class=\"mt-5\">
				<input type=\"submit\" name=\"Logout\" value=\"Logout\" class=\"btn btn-info\">
				</form>
				<small class=\"text-primary\">Click to logout!</small>";
		}
	?>
</body>
</html>