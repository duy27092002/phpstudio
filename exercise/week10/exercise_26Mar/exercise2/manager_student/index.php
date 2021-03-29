<?php require ('../config/connection.php'); ?>
<?php
	session_start();
	if (isset($_POST['addStudent'])) {
		header('location:create.php');
	}
	$sql = "SELECT * FROM faculty";
	$excuted = mysqli_query($conn, $sql);
	$_SESSION['result'] = $excuted->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
	<title>IT Plus</title>
	<meta charset="utf-8">
	<meta name="viewport", content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../front-end_framework/bootstrap.min.css">
	<script src="../js-library/jquery.min.js"></script>
	<script src="../js-library/popper.min.js"></script>
	<script src="../js-library/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="accordion mt-5" id="category">
			<div class="card">
				<div class="card-header" id="admin">
					<h2 class="mb-0">
						<button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#studentsAdministration" aria-expanded="false" aria-controls="studentsAdministration">
							Students Administration
						</button>
					</h2>
				</div>
				<div class="collapse" id="studentsAdministration" aria-labelledby="admin" data-parent="#category">
					<div class="card-body">
						<p>SA1</p>
						<p>SA2</p>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="studentsList">
					<h2 class="mb-0">
						<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#students" aria-expanded="false" aria-controls="students">
							Students List
						</button>
					</h2>
				</div>
				<div class="collapse" id="students" aria-labelledby="studentsList" data-parent="#category">
					<div class="card-body">
						SL1
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="facultyList">
					<h2 class="mb-0">
						<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#faculty" aria-expanded="false" aria-controls="faculty">
							Faculties List
						</button>
					</h2>
				</div>
				<div class="collapse" id="faculty" aria-labelledby="facultyList" data-parent="#category">
					<div class="card-body">
						<div class="accordion" id="facultyDetail">
							<!-- <div class="card">
								<div class="card-header" id="automation">
									<button type="button" class="collapsed btn btn-link btn-block text-left" data-toggle="collapse" data-target="#automationDetail" aria-expanded="false" aria-controls="automationDetail">
										Tự động hóa
									</button>
								</div>
								<div class="collapse" id="automationDetail" aria-labelledby="automation" data-parent="#facultyDetail">
									<div class="card-body">
										<?php
											$sql = "SELECT * FROM faculty WHERE id_faculty = '19231239'";
											$excuted = mysqli_query($conn, $sql);
											if (mysqli_num_rows($excuted) != 0) {
												$result = $excuted->fetch_all(MYSQLI_ASSOC);
												foreach ($result as $row) {?>
													<p>Tên khoa: <?php echo $row['name_faculty']; ?></p>
													<p>Mô tả: <?php echo $row['description_fac']; ?></p>
													<p>Thời gian thành lập: <?php echo $row['time_create']; ?></p>
													<a href="view_students.php" class="float-right mb-3">Xem danh sách sinh viên</a>
											<?php	}
											}
										?>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="mechatronics">
									<button type="button" class="collapsed btn btn-link btn-block text-left" data-toggle="collapse" data-target="#mechatronicsDetail" aria-expanded="false" aria-controls="mechatronicsDetail">
										Cơ điện tử
									</button>
								</div>
								<div class="collapse" id="mechatronicsDetail" aria-labelledby="mechatronics" data-parent="#facultyDetail">
									<div class="card-body">
										<?php
											$sql = "SELECT * FROM faculty WHERE id_faculty = '170104005'";
											$excuted = mysqli_query($conn, $sql);
											if (mysqli_num_rows($excuted) != 0) {
												$result = $excuted->fetch_all(MYSQLI_ASSOC);
												foreach ($result as $row) {?>
													<p>Tên khoa: <?php echo $row['name_faculty']; ?></p>
													<p>Mô tả: <?php echo $row['description_fac']; ?></p>
													<p>Thời gian thành lập: <?php echo $row['time_create']; ?></p>
													<a href="view_students.php" class="float-right mb-3">Xem danh sách sinh viên</a>
											<?php	}
											}
										?>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="chemicalEngineering">
									<button type="button" class="collapsed btn btn-link btn-block text-left" data-toggle="collapse" data-target="#chemicalEngineeringDetail" aria-expanded="false" aria-controls="chemicalEngineeringDetail">
										Công nghệ hóa học
									</button>
								</div>
								<div class="collapse" id="chemicalEngineeringDetail" aria-labelledby="chemicalEngineering" data-parent="#facultyDetail">
									<div class="card-body">
										<?php
											$sql = "SELECT * FROM faculty WHERE id_faculty = '192317231'";
											$excuted = mysqli_query($conn, $sql);
											if (mysqli_num_rows($excuted) != 0) {
												$result = $excuted->fetch_all(MYSQLI_ASSOC);
												foreach ($result as $row) {?>
													<p>Tên khoa: <?php echo $row['name_faculty']; ?></p>
													<p>Mô tả: <?php echo $row['description_fac']; ?></p>
													<p>Thời gian thành lập: <?php echo $row['time_create']; ?></p>
													<a href="view_students.php" class="float-right mb-3">Xem danh sách sinh viên</a>
											<?php	}
											}
										?>
									</div>
								</div>
							</div> -->
							<?php
								foreach ($_SESSION['result'] as $row) {?>
									<div class="card">
										<div class="card-header" id="<?php echo $row['id_faculty']; ?>">
											<button type="button" class="collapsed btn btn-link btn-block text-left" data-toggle="collapse" data-target="#<?php echo $row['code']; ?>" aria-expanded="false" aria-controls="<?php echo $row['code']; ?>">
												<?php echo $row['name_faculty']; ?>
											</button>
										</div>
										<div class="collapse" id="<?php echo $row['code']; ?>" aria-labelledby="<?php echo $row['id_faculty']; ?>" data-parent="#facultyDetail">
											<div class="card-body">
												<p>Faculty Name: <?php echo $row['name_faculty']; ?></p>
												<p>Description: <?php echo $row['description_fac']; ?></p>
												<p>Founded Time: <?php echo $row['time_create']; ?></p>
												<a href="view_students.php?id=<?php echo $row['id_faculty'] ?>" class="float-right mb-3">See the students list</a>
											</div>
										</div>
									</div>
							<?php	}?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="cleafix mt-3">
			<input type="submit" name="addStudent" value="+ Create New Student" class="float-right btn btn-success">
		</form>
	</div>
</body>
</html>