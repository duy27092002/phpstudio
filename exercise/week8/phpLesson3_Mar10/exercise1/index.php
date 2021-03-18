<!DOCTYPE html>
<html>
<head>
	<title>Exercise 1</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../front-end_framework/bootstrap.min.css">
</head>
<body>
	<div class="container border px-0">
		<?php
			$error = array();
			if ($_SERVER['REQUEST_METHOD'] == "POST") {
				if ($_POST['userName'] !== "admin") {
					$error['userName'] = "<small class=\"text-danger\">Username is wrong! Check it again, please!";
				} else {
					$userName = $_POST['userName'];
				}
				if ($_POST['psw'] !== "admin") {
					$error['psw'] = "<small class=\"text-danger\">Password is wrong! Check it again, please!";
				} else {
					$userPsw = $_POST['psw'];
				}
				if (empty($error)) {
					$result = "<p class=\"text-success mt-5\">Username: $userName</p>";
				}
			}
		?>
		<h4 class="p-4 text-center bg-success mb-3">Sign in</h4>
		<form class="mx-auto p-4 my-4" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<div class="input-group">
				<input type="text" name="userName" placeholder="Username" class="form-control bg-light">
			</div>
			<?php if(isset($error['userName'])) echo $error['userName']; ?>
			<div class="input-group mt-3">
				<input type="password" name="psw" placeholder="Password" class="form-control bg-light">	
			</div>
			<?php if(isset($error['psw'])) echo $error['psw']; ?>
			<div class="input-group text-center mt-3">
				<input type="submit" name="btnSubmit" class="form-control bg-success font-weight-bold" value="Login">
			</div>
			<?php if(isset($result)) echo $result; ?>
		</form>
	</div>
</body>
</html>