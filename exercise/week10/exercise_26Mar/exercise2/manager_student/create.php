<?php require ('../config/connection.php'); ?>
<?php
	if (isset($_POST['register'])) {
		$errors = [];
		if (empty($_POST['name'])) {
			$errors[] = "<small class=\"text-danger\">Name không được để trống!</small>";
		}
		if (empty($_POST['email'])) {
			$errors[] = "<small class=\"text-danger\">Email không được để trống!</small>";
		}
		$phoneFormat = "/[0-9]{10}/";
		if (isset($_POST['phone']) && !preg_match($phoneFormat, $_POST['phone'])) {
			$errors[] = "<small class=\"text-danger\">Phone phải là 1 dãy số gồm đúng 10 số!</small>";
		}
		if (empty($_POST['address'])) {
			$errors[] = "<small class=\"text-danger\">Address không được để trống!</small>";
		}
		if (empty($errors)) {
			date_default_timezone_set('Asia/ho_chi_minh');
			$time = date('d/m/y H:m:s');
			$name = mysqli_real_escape_string($conn, $_POST['name']);
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$phone = mysqli_real_escape_string($conn, $_POST['phone']);
			$address = mysqli_real_escape_string($conn, $_POST['address']);
			$faculty = mysqli_real_escape_string($conn, $_POST['facultyList']);
			
			$sql = "INSERT INTO students (id_faculty, name, email, phone, address, status, time_create) VALUES ('$faculty', '$name', '$email', '$phone', '$address', '1', '$time')";
			if (mysqli_query($conn, $sql)) {
				echo "<script>alert('Register Successfuly!')</script>";
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add New Student</title>
	<meta charset="utf-8">
	<meta name="viewport", content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../front-end_framework/bootstrap.min.css">
	<script src="../js-library/jquery.min.js"></script>
	<script src="../js-library/popper.min.js"></script>
	<script src="../js-library/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="mx-auto mt-5 w-50">
			<h2 class="text-center mb-4">Register</h2>
			<?php if (isset($errors) && count($errors) > 0) { ?>
	            <div class="alert alert-danger alert-dismissible fade show" role="alert">
	                <strong>Alert!</strong> 
	                <?php foreach ($errors as $error){?>
	                    <p><?php echo $error ?></p>
	                <?php }?>
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                    <span aria-hidden="true">&times;</span>
	                </button>
	            </div>
	        <?php } ?>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="cleafix mt-3">
				<div class="form-group">
					<label for="name" class="font-weight-bold">Name<span class="text-danger"> (*)</span></label>
					<input type="text" name="name" id="name" class="form-control">
				</div>
				<div class="form-group">
					<label for="email" class="font-weight-bold">Email<span class="text-danger"> (*)</span></label>
					<input type="email" name="email" id="email" class="form-control">
				</div>
				<div class="form-group">
					<label for="phone" class="font-weight-bold">Phone</label>
					<input type="text" name="phone" id="phone" class="form-control">
				</div>
				<div class="form-group">
					<label for="address" class="font-weight-bold">Address<span class="text-danger"> (*)</span></label>
					<input type="text" name="address" id="address" class="form-control">
				</div>
				<div class="form-group">
					<label for="faculty" class="font-weight-bold">Choose Faculty<span class="text-danger"> (*)</span></label>
					<select for="faculty" class="form-control" id="faculty" name="facultyList">
						<option value="19231239">Tự động hóa</option>
						<option value="170104005">Cơ điện tử</option>
						<option value="192317231">Công nghệ hóa học</option>
					</select>
				</div>
				<div class="form-group">
					<input type="submit" name="register" class="btn btn-success form-control" value="Register Now">
					<p class="text-center mt-3">Back to <span><a href="index.php">IT Plus</a></span></p>
				</div>
			</form>
		</div>
	</div>
</body>
</html>