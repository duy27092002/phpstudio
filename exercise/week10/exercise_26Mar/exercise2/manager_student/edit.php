<?php require ('../config/connection.php'); ?>
<?php
	$id = $_GET['id'];
	$sql = "SELECT * FROM students WHERE id_student= $id";
	$excuted = mysqli_query($conn, $sql);
	$result = $excuted->fetch_assoc(); // trả về 1 hàng duy nhất
	if (isset($_POST['save'])) {
		date_default_timezone_set('Asia/ho_chi_minh');
		$time_edit = date('d/m/y H:m:s');
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$phone = mysqli_real_escape_string($conn, $_POST['phone']);
		$address = mysqli_real_escape_string($conn, $_POST['address']);
		$status = mysqli_real_escape_string($conn, $_POST['statusList']);
		$faculty = mysqli_real_escape_string($conn, $_POST['facultyList']);
		$id = mysqli_real_escape_string($conn, $_GET['id']);

		$sql = "UPDATE students SET id_student = '$id', id_faculty = '$faculty', name = '$name', email = '$email', phone = '$phone', address = '$address', status = '$status', time_create = '$time_edit' WHERE id_student = $id";
		if (mysqli_query($conn, $sql)) {
			echo "<script>alert('Update Successfuly!')</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
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
			<h2 class="text-center mb-4">Edit</h2>
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
			<form action="edit.php?id=<?php echo $result['id_student']?>" method="post">
				<div class="form-group">
					<label for="name" class="font-weight-bold">Name<span class="text-danger"> (*)</span></label>
					<input type="text" name="name" id="name" class="form-control" value="<?php echo $result['name']; ?>">
				</div>
				<div class="form-group">
					<label for="email" class="font-weight-bold">Email<span class="text-danger"> (*)</span></label>
					<input type="email" name="email" id="email" class="form-control" value="<?php echo $result['email']; ?>">
				</div>
				<div class="form-group">
					<label for="phone" class="font-weight-bold">Phone</label>
					<input type="text" name="phone" id="phone" class="form-control" value="<?php echo $result['phone']; ?>">
				</div>
				<div class="form-group">
					<label for="address" class="font-weight-bold">Address<span class="text-danger"> (*)</span></label>
					<input type="text" name="address" id="address" class="form-control" value="<?php echo $result['address']; ?>">
				</div>
				<div class="form-group">
					<label for="status" class="font-weight-bold">Status</label>
					<select for="status" class="form-control" id="status" name="statusList">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
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
					<input type="submit" name="save" class="btn btn-success form-control" value="Save">
					<p class="text-center mt-3">Back to <span><a href="view_students.php?id=<?php echo $result['id_faculty'] ?>">Students List</a></span></p>
				</div>
			</form>
		</div>
	</div>
</body>
</html>