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
		<h2>Login</h2>
		<form action="check_login.php" method="post">
			<table>
				<tbody>
					<tr>
						<td>Username:</td>
						<td><input type="text" name="username" class="form-control"></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="password" class="form-control"></td>
					</tr>
				</tbody>
			</table>
			<input type="submit" name="btnLogin" value="Login" class="btn btn-primary mt-3">
			<input type="reset" name="btnReset" value="Reset" class="btn btn-secondary mt-3">
		</form>
	</div>
</body>
</html>