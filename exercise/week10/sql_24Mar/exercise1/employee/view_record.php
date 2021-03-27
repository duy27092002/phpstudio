<?php require('../config/connection.php');  ?>
<?php
	$id = $_GET['id'];
	$sql = "SELECT * FROM employee WHERE id = $id";
	$excuted = $conn->query($sql);
	$result = $excuted->fetch_all(MYSQLI_ASSOC);
	if (isset($_POST['back'])) {
		header('location:employer_list.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Employee</title>
	<meta charset="utf-8">
	<meta name="viewport", content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../front-end_framework/bootstrap.min.css">
	<script src="../js-library/jquery.min.js"></script>
	<script src="../js-library/popper.min.js"></script>
	<script src="../js-library/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="mx-auto mt-5 text-center p-3">
			<h2 class="mb-4">View Employee</h2>
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
							foreach ($result as $row) {?>
								<tr>
									<td class="text-center"><?php echo $row['id']; ?></td>
									<td><?php echo $row['name']; ?></td>
									<td><?php echo $row['des']; ?></td>
									<td class="text-center"><?php echo $row['salary']; ?></td>
									<td><?php echo $row['gender']; ?></td>
									<td><?php echo $row['birthday']; ?></td>
									<!-- <td><?php echo $row['avatar']; ?></td> --> <!-- avatar -->
									<td class="text-center">
										<form action="" method="post">
											<input type="submit" name="back" id="back" class="btn btn-primary" value="Back">
										</form>
									</td>
								</tr>
						<?php	}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>