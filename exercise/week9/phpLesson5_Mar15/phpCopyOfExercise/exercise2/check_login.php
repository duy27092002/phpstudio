<!DOCTYPE html>
<html>
<head>
	<title>Check Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../front-end_framework/bootstrap.min.css">
</head>
<body>
	<?php
		session_start();
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$username = $_POST['username'];
			$password = $_POST['password'];
			$emptyErr = "<small class=\"text-danger\">(*) Không được để trống</small>";
			if ($username == "" && $password != "") {
				$errName = $emptyErr;
			}
			if ($username != "" && $password == "") {
				$errPassword = $emptyErr;
			}
			if ($username == "" && $password == "") {
				$errNameAndPsw = $emptyErr;
			}
			if ($username !== "admin" && $password !== "123456" || $username == "admin" && $password != "123456" || $username != "admin" && $password == "123456") {
				echo "<script> alert('Failed') </script>";
				header('Refresh:1; url=index.php');
				require 'index.php';
			} else {
				if (isset($_POST['rememberMe'])) {
					setcookie("Username", $username, time() + (30), "/");
				} else {
					$_SESSION['Username']  = $username;
				}
				header('location:login_success.php');
			}
		}
	?>
</body>
</html>