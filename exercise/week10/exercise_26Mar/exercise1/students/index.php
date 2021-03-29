<?php require ('../config/connection.php'); ?>
<?php
	if (isset($_POST['register'])) {
		$errors = [];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confirmPassword = $_POST['confirm_password'];
		$formatPsw = "/\w{8,}/";
		if (empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
			$errors['email'] = '<small class="text-danger">Email is required and in the correct format!</small>';
		}
		if (empty($password) || !preg_match($formatPsw, $password)) {
			$errors['password'] = '<small class="text-danger">Password is required and has at least 8 characters!</small>';
		}
		if ($password != $confirmPassword) {
			$errors['confirm_password'] = '<small class="text-danger">Wrong! Check confirm password again, please!</small>';
		}
		if (empty($errors)) {
			$firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
			$lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
			$email = mysqli_real_escape_string($conn, $email);
			$password = mysqli_real_escape_string($conn, $password);
			$confirmPassword = mysqli_real_escape_string($conn, $confirmPassword);
			$query = "INSERT INTO students (first_name, last_name, email, password, confirm_password) VALUES ('$firstName', '$lastName', '$email', '$password', '$confirmPassword')";
			if ($conn->query($query)) {
				echo "<script>alert('Register Successfuly! And Try to login')</script>";
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
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
			<h2>Register</h2>
			<p>Create your account. It's free and only takes a minute.</p>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<div class="form-group form-row">
					<div class="col">
						<input type="text" name="firstName" id="firstName" class="form-control" placeholder="First Name">
					</div>
					<div class="col">
						<input type="text" name="lastName" id="lastName" class="form-control" placeholder="Last Name">
					</div>
				</div>
				<div class="form-group">
					<input type="email" name="email" id="email" class="form-control" placeholder="Email">
					<?php if(isset($errors['email'])) echo $errors['email']; ?>
				</div>
				<div class="form-group">
					<input type="password" name="password" id="password" class="form-control" placeholder="Password">
					<?php if(isset($errors['password'])) echo $errors['password']; ?>
				</div>
				<div class="form-group">
					<input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password">
					<?php if(isset($errors['confirm_password'])) echo $errors['confirm_password']; ?>
				</div>
				<div class="form-group form-check-inline">
					<label class="form-check-label" for="accept">
						<input type="checkbox" name="accept" id="accept" class="form-check-input mr-2">I accept the <a href="#" class="text-primary">Terms of Use</a> & <a class="text-primary" href="#">Privacy Policy</a>
					</label>
				</div>
				<div class="form-group">
					<input type="submit" name="register" id="register" value="Register Now" class="btn btn-success form-control">
				</div>
				<div class="form-group">
					<p class="text-center">Already have an account? <span class="text-primary"><a href="login.php">Sign in</a></span></p>
				</div>
			</form>
		</div>
	</div>
</body>
</html>