<?php require ('../config/connection.php'); ?>
<?php
	session_start();
	$idFaculty = $_GET['id'];
	$sql = "SELECT * FROM students WHERE id_faculty = $idFaculty";
	$excuted = mysqli_query($conn, $sql);
	$_SESSION['result'] = $excuted->fetch_all(MYSQLI_ASSOC); // trả về nhiều hàng (nếu có)
?>
<!DOCTYPE html>
<html>
<head>
	<title>Students List</title>
	<meta charset="utf-8">
	<meta name="viewport", content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../front-end_framework/bootstrap.min.css">
	<script src="../js-library/jquery.min.js"></script>
	<script src="../js-library/popper.min.js"></script>
	<script src="../js-library/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h2 class="text-center">Students List</h2>
		<div class="table-responsive mx-auto p-3">
			<table class="table table-bordered">
				<thead>
					<th class="text-center">Id Student</th>
					<th class="text-center">Id Faculty</th>
					<th class="text-center">Student Name</th>
					<th class="text-center">Email</th>
					<th class="text-center">Phone</th>
					<th class="text-center">Address</th>
					<th class="text-center">Status</th>
					<th class="text-center">Time Create</th>
					<th class="text-center">Action</th>
				</thead>
				<tbody>
					<?php
						foreach ($_SESSION['result'] as $row) {?>
							<tr>
								<td class="text-center"><?php echo $row['id_student']; ?></td>
								<td class="text-center"><?php echo $row['id_faculty']; ?></td>
								<td><?php echo $row['name']; ?></td>
								<td><?php echo $row['email']; ?></td>
								<td><?php echo $row['phone']; ?></td>
								<td><?php echo $row['address']; ?></td>
								<td class="text-center"><?php echo $row['status']; ?></td>
								<td><?php echo $row['time_create']; ?></td>
								<td>
									<a href="edit.php?id=<?php echo $row['id_student'];?>" class="text-center">Edit</a>
									<a href="delete.php?id=<?php echo $row['id_student']; ?>" class="text-center" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');">Delete</a>
								</td>
							</tr>
					<?php	}?>
				</tbody>
			</table>
		</div>
		<p class="float-right mb-5 p-3"><a href="index.php" class="btn btn-primary">Back</a></p>
	</div>
</body>
</html>