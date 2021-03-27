<?php require ('../config/connection.php'); ?>
<?php
	$id = $_GET['id'];
	$sql = "SELECT * FROM employee WHERE id = $id";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	if (isset($_POST['save'])) {
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$des = mysqli_real_escape_string($conn, $_POST['des']);
		$salary = mysqli_real_escape_string($conn, $_POST['salary']);
		$gender = mysqli_real_escape_string($conn, $_POST['gender']);
		$birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
		/*// avatar
		$file = $_FILES['avatar'];
		$avatar = mysqli_real_escape_string($conn, $file['name']);*/
		$id = mysqli_real_escape_string($conn, $_GET['id']);

		$sql = sprintf("UPDATE employee SET  name = '%s', des = '%s', salary = '%s', gender = '%s', birthday = '%s'/*, avatar = '%s'*/ WHERE id = $id", $name, $des, $salary, $gender, $birthday/*, $avatar*/, $id);

		$result = $conn->query($sql);
		if ($result) {
			header('location:employer_list.php');
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Employee</title>
	<meta charset="utf-8">
	<meta name="viewport", content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../front-end_framework/bootstrap.min.css">
	<script src="../js-library/jquery.min.js"></script>
	<script src="../js-library/popper.min.js"></script>
	<script src="../js-library/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="mx-auto bg-light p-3 mt-5">
			<h2 class="text-center">Edit Employee</h2>
			<form action="edit.php?id=<?php echo $row['id']?>" method="post">
				<div class="form-group">
					<label for="name" class="font-weight-bold">Name <span class="text-danger">*</span></label>
					<input type="text" name="name" id="name" class="form-control" value="<?php echo $row['name']; ?>">
				</div>
				<div class="form-group">
					<label for="des" class="font-weight-bold">Description</label>
					<textarea name="des" id="des" class="form-control" rows="5">
						<?php echo $row['des']; ?>
					</textarea>
				</div>
				<div class="form-group">
					<label for="salary" class="font-weight-bold">Salary</label>
					<input type="text" name="salary" id="salary" class="form-control" value="<?php echo $row['salary']; ?>">
				</div>
				<p class="mb-0 font-weight-bold">Gender</p>
				<div class="form-group form-check-inline">
					<label class="form-check-label mr-3 mt-1">
						<input type="radio" name="gender" value="male" class="form-check-input mr-2">Male
					</label>
					<label class="form-check-label mr-3 mt-1">
						<input type="radio" name="gender" value="female" class="form-check-input mr-2">Female
					</label>
				</div>
				<div class="form-group">
					<label for="birthday" class="font-weight-bold">Birthday</label>
					<input type="date" name="birthday" id="birthday" class="form-control" value="<?php echo $row['birthday']; ?>">
				</div>
				<!-- upload avatar -->
				<div class="form-group">
					<label for="avatar" class="font-weight-bold">Avatar</label>
					<input type="file" name="avatar" id="avatar" class="form-control-file border" value="<?php $row['avatar']; ?>">
				</div>
				<div class="form-group">
					<input type="submit" name="save" id="save" class="btn btn-primary" value="Save">
					<input type="reset" name="cancel" id="cancel" class="btn btn-ligth" value="Cancel">
				</div>
			</form>
		</div>
	</div>
</body>
</html>