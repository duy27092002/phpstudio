<?php
	define('DB_HOST', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_DATABASE', 'ex1_26mar');

	$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
	mysqli_set_charset($conn, 'utf8mb4');
	if (!$conn) {
		die('Connection failed: '. mysqli_connect_error());
	}
?>