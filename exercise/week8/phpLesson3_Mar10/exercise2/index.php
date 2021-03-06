<!DOCTYPE html>
<html>
<head>
	<title>Exercise 2</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../front-end_framework/bootstrap.min.css">
	<?php include('validate_form.php'); ?>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-8 col-lg-8 mb-3">
				<div class="border pb-3">
					<h5 class="bg-light p-3">Registration Form</h5>
					<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="px-3">
						<div class="form-group">
							<label>First name</label>
							<input type="text" name="firstName" id="firstName" class="form-control" value="<?php echo isset($data['firstName']) ? $data['firstName'] : ''; ?>">
							<?php echo isset($error['firstName']) ? $error['firstName'] : "" ; ?>
						</div>
						<div class="form-group">
							<label>Last name</label>
							<input type="text" name="lastName" id="lastName" class="form-control"  value="<?php echo isset($data['lastName']) ? $data['lastName'] : ''; ?>">
							<?php echo isset($error['lastName']) ? $error['lastName'] : "" ; ?>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" name="email" id="email" class="form-control"  value="<?php echo isset($data['email']) ? $data['email'] : ''; ?>">
							<?php echo isset($error['email']) ? $error['email'] : "" ; ?>
						</div>
						<div class="form-check-inline form-group">
							<span class="mr-3">Gender</span>
							<label class="form-check-label mr-2">
								<input type="radio" name="gender" id="male" class="form-check-input" value="Male" <?php $data['gender'] = isset($_POST['gender']) ? $_POST['gender'] : ""; if($data['gender'] == "Male") echo "checked"; ?>>Male
							</label>
							<label class="form-check-label">
								<input type="radio" name="gender" id="female" class="form-check-input" value="Female" <?php $data['gender'] = isset($_POST['gender']) ? $_POST['gender'] : ""; if($data['gender'] == "Female") echo "checked"; ?>>Female
							</label>
						</div>
						<div class="form-group">
							<label for="state">State</label>
							<select class="form-control" id="state" name="state">
								<option value="Johor" <?php if(isset($checkedJohor)) echo $checkedJohor ?>>Johor</option>
								<option value="Massachusetts" <?php if(isset($checkedMassachusetts)) echo $checkedMassachusetts ?>>Massachusetts</option>
								<option value="Washington" <?php if(isset($checkedWashington)) echo $checkedWashington ?>>Washington</option>
							</select>
						</div>
						<div class="form-group">
							<p class="mb-1">Hobbies</p>
							<div class="form-check-inline">
								<label class="form-check-label mr-2">
									<input type="checkbox" name="hobby[]" id="badmintion" class="form-check-input" value="Badmintion" <?php if(isset($badmintion)) echo $badmintion; ?>>Badmintion
								</label>
								<label class="form-check-label mr-2">
									<input type="checkbox" name="hobby[]" id="football" class="form-check-input" value="Football" <?php if(isset($football)) echo $football; ?>>Football
								</label>
								<label class="form-check-label">
									<input type="checkbox" name="hobby[]" id="bicycle" class="form-check-input" value="Bicycle" <?php if(isset($bicycle)) echo $bicycle; ?>>Bicycle
								</label>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" name="saveRecord" class="btn btn-primary text-white" value="Save record">
							<input type="reset" name="reset" class="btn btn-outline-secondary" value="Reset">
						</div>
					</form>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-4 col-lg-4">
				<div class="border">
					<h5 class="bg-light p-3">Featured</h5>
					<h5 class="p-3">Special title treatment</h5>
					<p class="px-3">With supporting text below as a natural lead-in to additional content.</p>
					<p class="px-3"><button type="button" class="btn btn-primary text-white">Go somewhere</button></p>
				</div>
			</div>
		</div>
		<?php if(isset($result)) echo $result; ?>
	</div>
</body>
</html>