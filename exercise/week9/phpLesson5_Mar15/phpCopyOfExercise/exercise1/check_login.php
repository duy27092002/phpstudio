<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../front-end_framework/bootstrap.min.css">
</head>
<body>
	<?php
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			if ($_POST['username'] == "camnh" && $_POST['password'] == "123456") {
				session_start();
				$_SESSION['username'] = "camnh";
				$_SESSION['login'] = 1; // đã đăng nhập thành công
				header('location:login_success.php');
			} else {
				echo "<h1 class=\"text-danger\">Failed</h1>";
				header('Refresh:2; url=index.php');
			}
		}
	?>
</body>
</html>