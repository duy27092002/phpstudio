<?php require('../config/connection.php'); ?>

<?php
	//1. Viết câu truy vấn SQL
	$sql = "SELECT * FROM employee";
	//2. Thực thi truy vấn SQL
	$queryExecuted = $conn->query($sql);
	//3. Đổ toàn bộ kết quả trả về dưới dạng Associative array.
	$result = $queryExecuted->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Employer List</title>
	<meta charset="utf-8">
	<meta name="viewport", content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../front-end_framework/bootstrap.min.css">
	<script src="../js-library/jquery.min.js"></script>
	<script src="../js-library/popper.min.js"></script>
	<script src="../js-library/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="clearfix my-4">
			<span class="float-left"><h2>Employees List</h2></span>
			<span class="float-right"><button class="btn btn-success">
				<a href="index.php" class="text-white text-decoration-none">+ Add New Employee</a>
			</button></span>
		</div>
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th class="text-center">Name</th>
						<th class="text-center">Description</th>
						<th class="text-center">Salary</th>
						<th class="text-center">Gender</th>
						<th class="text-center">Birthday</th>
						<!-- <th class="text-center">Avatar</th> --> <!-- avatar -->
						<th class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						if (count($result) > 0) {
							/*//4. avatar
							$pathToUpload = "avatar_images";
							move_uploaded_file($file['tmp_name'], __DIR__."/{$pathToUpload}/{$row['avatar']}"); */
							foreach ($result as $row) {?>
								<tr>
									<td class="text-center"><?php echo $row['id']; ?></td>
									<td><?php echo $row['name']; ?></td>
									<td><?php echo $row['des']; ?></td>
									<td class="text-center"><?php echo $row['salary']; ?></td>
									<td><?php echo $row['gender']; ?></td>
									<td><?php echo $row['birthday']; ?></td>
									<!-- <td><img src="$pathToUpload/<?php echo $row['avatar']; ?>"></td> --> <!-- avatar -->
									<td>
										<a href="view_record.php?id=<?php echo $row['id']; ?>">See more</a>
										<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
										<a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?');">Delete</a>
									</td>
								</tr>
						<?php	}
						} else {?>
							<tr>
								<td colspan="7">0 results</td>
							</tr>
						<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>