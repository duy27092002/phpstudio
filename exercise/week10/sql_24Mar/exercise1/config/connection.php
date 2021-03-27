<?php
	define('DB_HOST', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_DATABASE', 'my_company');

	$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
	
	mysqli_set_charset($conn, 'utf8mb4');

	// Check connection
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error()); //stop execution, rest of the code will not be executed
	}
?>