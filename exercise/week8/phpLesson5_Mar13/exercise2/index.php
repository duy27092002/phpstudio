<!DOCTYPE html>
<html>
<head>
	<title>Exercise 2</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../front-end_framework/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<?php include('validate_form.php'); ?>
</head>
<body>
	<div class="container p-5">
		<h1 class="text-white mb-4">Create an account</h1>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype = "multiart / form-data">
			<div class="form-group">
				<input type="text" name="userName" class="form-control" placeholder="User Name" value="<?php if(isset($userName)) echo $userName; ?>">
				<?php if(isset($error['userName'])) echo $error['userName']; ?>
			</div>
			<div class="form-group">
				<input type="email" name="email" class="form-control" placeholder="Email" value="<?php if(isset($email)) echo $email; ?>">
				<?php if(isset($error['email'])) echo $error['email']; ?>
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="Password" value="<?php if(isset($psw)) echo $psw; ?>">
				<?php if(isset($error['password'])) echo $error['password']; ?>
			</div>
			<div class="form-group">
				<input type="password" name="confirmPsw" class="form-control" placeholder="Confirm Password" value="<?php if(isset($confirmPsw)) echo $confirmPsw; ?>">
				<?php if(isset($error['confirmPsw'])) echo $error['confirmPsw']; ?>
			</div>
			<div class="form-group">
				<span class="text-white">
					Select your avatar:
					<input type="file" name="avatar" class="form-control-file border" >
					<?php if(isset($error['avatar'])) echo $error['avatar']; ?>
				</span>
			</div>
			<input type="submit" name="register" class="btn btn-primary form-control my-3" value="Register">
		</form>
		<?php if(isset($result)) echo $result; ?>
	</div>
</body>
</html>