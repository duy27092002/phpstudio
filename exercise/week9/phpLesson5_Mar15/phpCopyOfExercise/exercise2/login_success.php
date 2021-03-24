<!DOCTYPE html>
<html>
<head>
	<title>Login success</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../front-end_framework/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<?php
			session_start();
			//set timezone hiện tại là múi giờ +7
   			date_default_timezone_set('Asia/Bangkok');
   			if (isset($_SESSION['Username'])) {
   				$username = $_SESSION['Username'];
   			}
   			if (isset($_COOKIE['Username'])) {
   				$username = $_COOKIE['Username'];
   			}
			if (!isset($username)) {
				echo "<h2 class=\"text-danger text-center\">Bạn cần đăng nhập để có thể truy cập trang này</h2>";
				header('Refresh:5; url=index.php', true, 303);
			} else { ?>
				<h1 class="text-success">Đăng nhập thành công!</h1>
				<p>Chào mừng bạn, <strong class="text-danger text-uppercase"><?php echo $_COOKIE['Username']; ?></strong></p>
				<p>Thời gian hiện tại đang login: <?php echo date('d/m/y H:m:s'); ?></p>
				<form action="logout.php" method="post"> 
					<input type="submit" name="logout" value="Logout" class="btn btn-danger">
				</form>
		<?php	}?>
	</div>
</body>
</html>