<?php
	session_start();
	echo "Your name: ".$_SESSION['Name']."<br>";
	echo "Your birthday: ".$_SESSION['Birthday']."<br>";
	session_unset();
	session_destroy();
?>