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
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$username = $_POST['username'];
			$password = $_POST['password'];
			// connect database
			$conn = mysqli_connect("localhost", "root", "", "sign_in");
			// query (truy van)
			$sql = "SELECT * FROM infomation WHERE username = '$username' AND password = '$password'";
			// enforcement (thuc thi)
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				session_start();
				$_SESSION['username'] = $username;
				echo "<h1>Success!</h1>"."<br>Welcome, ".$_SESSION['username'];
				echo "<br><form action=\"logout.php\" method=\"post\" class=\"mt-5\">
				<input type=\"submit\" name=\"btnLogout\" value=\"Logout\" class=\"btn btn-info\">
				</form>
				<small class=\"text-primary\">Click to logout!</small>";
			} else{
				echo "<h1>Failed</h1>";
				require_once 'index.php';
			}
		}
	?>
</body>
</html>