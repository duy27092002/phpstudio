<?php require ('../config/connection.php'); ?>
<?php
	if (isset($_POST['login'])) {
		$errors = [];
		$email = $_POST['email'];
		$password = $_POST['password'];
		if (empty($email)) {
			$errors['email'] = '<small class="text-danger">Email is required!</small>';
		}
		if (empty($password)) {
			$errors['password'] = '<small class="text-danger">Password is required!</small>';
		}
		if (empty($errors)) {
			$sql = "SELECT * FROM students WHERE email = '$email' AND password = '$password'";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) != 0) {
				echo "<script>alert('Login Success!')</script>";
			} else {
				echo "<script>alert('Login Failed!')</script>";
				$keepEmail = $email;
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport", content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../front-end_framework/bootstrap.min.css">
	<script src="../js-library/jquery.min.js"></script>
	<script src="../js-library/popper.min.js"></script>
	<script src="../js-library/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="mx-auto p-3 mt-5 w-50">
			<h2>Login</h2>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<div class="form-group">
					<input type="email" name="email" id="email" placeholder="Email" class="form-control" value="<?php if(isset($keepEmail)) echo $keepEmail; ?>">
					<?php if(isset($errors['email'])) echo $errors['email']; ?>
				</div>
				<div class="form-group">
					<input type="password" name="password" id="password" placeholder="Password" class="form-control">
					<?php if(isset($errors['password'])) echo $errors['password']; ?>
				</div>
				<div class="form-group">
					<input type="submit" name="login" id="login" value="Login" class="btn btn-success form-control">
					<p class="text-center mt-3">Don't have an account? <a href="index.php" class="text-primary">Register</a></p>
				</div>
			</form>
		</div>
	</div>
</body>
</html>