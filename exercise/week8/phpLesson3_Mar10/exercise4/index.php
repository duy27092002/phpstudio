<!DOCTYPE html>
<html>
<head>
	<title>Exercise 4</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../front-end_framework/bootstrap.min.css">
	<?php include('validate_form.php'); ?>
</head>
<body>
	<div class="container border">
		<div class="mx-auto my-5">
			<h1 class="text-center text-success mb-3">Subscription Form</h1>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<fieldset class="border p-3">
					<legend class="mb-0">Personal Infomation</legend>
					<div class="row">
						<div class="col-12 col-sm-12 col-md-6 col-lg-6">
							<div class="row">
								<div class="col-12 col-sm-12 col-md-3 col-lg-3">
									Last Name:
								</div>
								<div class="col-12 col-sm-12 col-md-9 col-lg-9">
									<input type="text" name="lastName" class="form-control" id="lastName" value="<?php if (isset($lastName)) echo $lastName ; ?>">
								</div>
							</div>
							<span><?php if (isset($error['lastName'])) echo $error['lastName']; ?></span>
						</div>
						<div class="col-12 col-sm-12 col-md-6 col-lg-6">
							<div class="row">
								<div class="col-12 col-sm-12 col-md-3 col-lg-3">
									First Name:
								</div>
								<div class="col-12 col-sm-12 col-md-9 col-lg-9">
									<input type="text" name="firstName" class="form-control" value="<?php if (isset($firstName)) echo $firstName ; ?>">
								</div>
							</div>
							<span><?php if (isset($error['firstName'])) echo $error['firstName']; ?></span>
						</div>
					</div>
					<div class="form-check-inline my-2">
						<label class="form-check-label mr-3">
							<input type="radio" name="gender" class="form-check-input mr-2" value="male" <?php if (isset($gender) && $gender=="male") echo "checked id=\"male\""; ?>>Male
						</label>
						<label class="form-check-label">
							<input type="radio" name="gender" class="form-check-input mr-2" value="female" <?php if (isset($gender) && $gender=="female") echo "checked id=\"female\""; ?>>Female
						</label>
					</div>
					<p class="mb-0">Address:</p>
					<textarea name="address" rows="5" cols="40"><?php if (isset($address)) echo $address; ?></textarea>	
					<p><?php if (isset($error['address'])) echo $error['address']; ?></p>
				</fieldset>
				<div class="border p-3 mt-3">
					<legend>Magazines subscription for</legend>
					<div class="form-check-inline">
						<label class="form-check-label mr-3">
							<input type="checkbox" name="magazines[]" class="form-check-input mr-2" value="Time" <?php if(isset($checkValueTime)) echo $checkValueTime; ?>>TIME
						</label>
						<label class="form-check-label mr-3">
							<input type="checkbox" name="magazines[]" class="form-check-input mr-2" value="Newsweek" <?php if(isset($checkValueNewsweek)) echo $checkValueNewsweek; ?>>Newsweek
						</label>
						<label class="form-check-label mr-3">
							<input type="checkbox" name="magazines[]" class="form-check-input mr-2" value="Sunday" <?php if(isset($checkValueSunday)) echo $checkValueSunday; ?>>Sunday
						</label>
						<label class="form-check-label mr-3">
							<input type="checkbox" name="magazines[]" class="form-check-input mr-2" value="Vogue" <?php if(isset($checkValueVogue)) echo $checkValueVogue; ?>>Vogue
						</label>
						<label class="form-check-label">
							<input type="checkbox" name="magazines[]" class="form-check-input mr-2" value="People" <?php if(isset($checkValuePeople)) echo $checkValuePeople; ?>>People
						</label>
					</div>
					<p><?php if(isset($error['magazines'])) echo $error['magazines']; ?></p>
				</div>
				<fieldset class="border p-3">
					<legend class="mb-0">Duration</legend>
					<div class="form-check-inline">
						<label class="form-check-label mr-3">
							<input type="radio" name="year" class="form-check-input mr-2" value="1 Year" <?php if (isset($year) && $year=="1 Year") echo "checked"; ?>>1 Year
						</label>
						<label class="form-check-label mr-3">
							<input type="radio" name="year" class="form-check-input mr-2" value="3 Years" <?php if (isset($year) && $year=="3 Years") echo "checked"; ?>>3 Years
						</label>
						<label class="form-check-label">
							<input type="radio" name="year" class="form-check-input mr-2" value="5 Years" <?php if (isset($year) && $year=="5 Years") echo "checked"; ?>>5 Years
						</label>
					</div>
				</fieldset>
				<fieldset class="border p-3 mb-3">
					<legend class="mb-0">Payment options</legend>
					<div class="form-check-inline">
						<label class="form-check-label mr-3">
							<input type="radio" name="payOpt" class="form-check-input mr-2" value="Demand Draf" <?php if (isset($payOpt) && $payOpt == "Demand Draf") echo "checked"; ?>>Demand Draf
						</label>
						<label class="form-check-label">
							<input type="radio" name="payOpt" class="form-check-input mr-2" value="Credit Card" <?php if (isset($payOpt) && $payOpt == "Credit Card") echo "checked"; ?>>Credit Card
						</label>
					</div>
				</fieldset>
				<button type="submit" class="btn btn-success text-white" name="btnProcess">Process</button>
				<input type="reset" class="btn btn-secondary text-white" name="btnReset" value="Reset">
			</form>
		</div>
		
	</div>
</body>
</html>