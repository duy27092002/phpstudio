<!DOCTYPE html>
<html>
<head>
	<title>Exercise 3</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../front-end_framework/bootstrap.min.css">
	<?php include('validate_form.php'); ?>
</head>
<body>
	<div class="container">
		<div class="mx-auto bg-light mt-3 p-3">
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<div class="form-group">
					<input type="text" name="name" id="name" class="form-control" placeholder="Your name" value="<?php if (isset($name)) echo $name; ?>">
					<?php
						if (isset($error['name'])) { ?>
							<span class="text-danger"><?php echo $error['name']; ?></span>
					<?php } ?>
				</div>
				<div class="form-group">
					<input type="email" name="email" id="email" class="form-control" placeholder="Your Email Address" value="<?php if (isset($email)) echo $email; ?>">
					<?php
						if (isset($error['email'])) { ?>
							<span class="text-danger"><?php echo $error['email']; ?></span>
					<?php } ?>
				</div>
				<div class="form-group">
					<input type="tel" name="phoneNumber" id="phoneNumber" class="form-control" placeholder="Your Phone Number" value="<?php if (isset($phoneNumber)) echo $phoneNumber; ?>">
					<?php
						if (isset($error['phoneNumber'])) { ?>
							<span class="text-danger"><?php echo $error['phoneNumber']; ?></span>
					<?php } ?>
				</div>
				<div class="form-group">
					<input type="url" name="website" id="website" class="form-control" placeholder="Your Web Site starts with http://" value="<?php if (isset($website)) echo $website; ?>">
					<?php
						if (isset($error['website'])) { ?>
							<span class="text-danger"><?php echo $error['website']; ?></span>
					<?php } ?>
				</div>
				<div class="form-group">
					<textarea name="message" rows="5" class="form-control" placeholder="Type your Message Here...">
						<?php if(isset($_POST['message'])) echo $_POST['message']; ?>
					</textarea>
					<p><?php if(isset($error['message'])) echo $error['message'] ; ?></p>
				</div>
				<div class="form-group">
					<input type="submit" name="submit" value="submit" class="form-control bg-danger text-white text-center text-uppercase">
				</div>
			</form>
			<p><?php if(isset($result)) echo $result; ?></p>
		</div>
	</div>
</body>
</html>