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
		<h1>Login</h1>
		<form action="check_login.php" method="post">
			<div class="form-group">
				<input type="text" name="username" class="form-control" placeholder="Username">
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="Password">
			</div>
			<div class="form-group">
				<input type="submit" name="login" value="Login" class="btn btn-primary">
			</div>
		</form>
	</div>
</body>
</html>