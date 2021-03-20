<!DOCTYPE html>
<html>
<head>
	<title>Extra exercise</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../front-end_framework/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<?php include('validate_form.php'); ?>
</head>
<body>
	<div class="container-fluid clearfix p-5">
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="float-right p-3 bg-white">
			<p class="text-center">Đăng Nhập Với</p>
			<div class="form-group text-center">
				<button type="button" class="btn btn-primary">Facebook</button>
				<button type="button" class="btn btn-danger">Google</button>
				<button type="button" class="btn btn-success">Phone</button>
			</div>
			<p class="text-center">Hoặc</p>
			<div class="form-group">
				<input type="text" name="userName" class="form-control" placeholder="Username" value="<?php if(isset($userName)) echo $userName; ?>">
				<?php if(isset($errUserName)) echo $errUserName; ?>
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="Password">
				<?php if(isset($errPassword)) echo $errPassword; ?>
			</div>
			<div class="form-group clearfix">
				<span class="float-left form-check">
					<label class="form-check-label">
						<input type="checkbox" name="rememberPsw" class="form-check-input mr-2" <?php if(isset($rememberPsw) && $rememberPsw !== "") echo "checked"; ?>>Nhớ mật khẩu
					</label>
				</span>
				<span class="float-right text-info">Quên mật khẩu?</span>
			</div>
			<button type="submit" name="btnSignIn" class="btn btn-primary form-control text-center mb-3">Đăng Nhập</button>
			<p class="text-center">Bạn Chưa Có Tài Khoản</p>
			<button type="button" class="btn btn-info form-control text-center">Đăng Ký</button>
			<p class="text-success mt-3"><?php if(isset($returnUserName)) echo $returnUserName; ?></p>
		</form>
	</div>
</body>
</html>