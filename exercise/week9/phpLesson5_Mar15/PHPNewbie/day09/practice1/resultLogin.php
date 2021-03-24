<?php
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$username = $_POST['username'];
		$password = $_POST['password'];
		setcookie("Username",$username, time() + (60), "/");
		setcookie("Password",$password, time() + (60), "/");
		if (isset($_COOKIE['Username'])) {
			echo "Welcome, ".$_COOKIE['Username']."<br>";
		}
		if ($password == "qwerty") {
			echo "Your password is correct!";
		} else {
			echo "But your password is wrong!";
		}
	}
?>