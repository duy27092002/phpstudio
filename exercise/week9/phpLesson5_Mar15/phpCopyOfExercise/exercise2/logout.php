<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../front-end_framework/bootstrap.min.css">
</head>
<body>
	<?php
		if (isset($_POST['logout'])) { 
	        //xoá toàn bộ session và cookie
	        unset($_SESSION['username']);
	        setcookie('username', '', time() - 1);
	        echo "<script> alert('Bạn đã đăng xuất khỏi hệ thống'); </script>";
			header('Refresh:0.1; url=index.php');  
	    }
	?>
</body>
</html>