<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../front-end_framework/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="mx-auto w-50 bg-light p-4 mt-5">
			<form action="check_login.php" method="post">
				<div class="form-group">
					<input type="text" name="username" placeholder="Username" class="form-control">
					<?php if(isset($errName)) echo $errName; ?>
					<?php if(isset($errNameAndPsw)) echo $errNameAndPsw; ?>
				</div>
				<div class="form-group">
					<input type="password" name="password" placeholder="Password" class="form-control">
					<?php if(isset($errPassword)) echo $errPassword; ?>
					<?php if(isset($errNameAndPsw)) echo $errNameAndPsw; ?>
				</div>
				<div class="form-check-inline form-group">
					<label class="form-check-label">
						<input type="checkbox" name="rememberMe" class="form-check-input mr-2">Remember me
					</label>
				</div>
				<div class="form-group">
					<input type="submit" name="login" value="Login" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>
</body>
</html>