<?php
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$userName = $_POST['userName'];
		$password = $_POST['password'];
		if ($userName !== "admin") {
			$errUserName = "<small class=\"text-danger\">Username is not correct!</small>";
		} else {
			$returnUserName = $userName;
		}
		if ($password !== "Iamnotarobot@Mis2022") {
			$errPassword = "<small class=\"text-danger\">Passwword is not correct!</small>";
		}
		if (empty($_POST['rememberPsw'])) {
			$rememberPsw = "";
		} else {
			$rememberPsw = $_POST['rememberPsw'];
		}
	}
?>