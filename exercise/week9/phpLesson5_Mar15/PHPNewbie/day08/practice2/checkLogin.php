<?php
	session_start();
	echo "Welcome! ".$_SESSION['Username']."<br>";
	if ($_SESSION['Password'] == "qwerty") {
		echo "Your password is correct!";
	} else {
		echo "Your password is wrong!";
	}
	session_unset();
	session_destroy();
?>