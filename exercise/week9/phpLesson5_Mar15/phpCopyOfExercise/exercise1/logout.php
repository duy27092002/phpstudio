<?php
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		session_start();
		session_destroy();
		echo "<h2>Đăng xuất thành công</h2>";
		header('Refresh:2; url=index.php');
	}
?>