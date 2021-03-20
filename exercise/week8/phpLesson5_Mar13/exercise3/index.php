<!DOCTYPE html>
<html>
<head>
	<title>Exercise 3</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../front-end_framework/bootstrap.min.css">
	<?php include('validate_form.php'); ?>
</head>
<body>
	<div class="container">
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype = "multiart / form-data" class="p-5 bg-light mx-auto">
			<div class="form-group">
				<label>Text</label>
				<input type="text" name="text" class="form-control" placeholder="Placeholder" value="<?php if(isset($txt)) echo $txt; ?>">
				<?php if(isset($txtErr)) echo $txtErr; ?>
			</div>
			<p>Checkbox</p>
			<div class="form-check form-group">
				<label class="form-check-label">
					<input type="checkbox" name="checkbox[]" class="mr-2 form-check-input" value="checkbox1" <?php if(isset($checkedOpt1
						)) echo $checkedOpt1; ?>>Checkbox1
				</label>
			</div>
			<div class="form-check form-group">
				<label class="form-check-label">
					<input type="checkbox" name="checkbox[]" class="mr-2 form-check-input" value="checkbox2" <?php if(isset($checkedOpt2
						)) echo $checkedOpt2; ?>>Checkbox2
				</label>
			</div>
			<div class="form-check form-group">
				<label class="form-check-label">
					<input type="checkbox" name="checkbox[]" class="mr-2 form-check-input" value="checkbox3" <?php if(isset($checkedOpt3
						)) echo $checkedOpt3; ?>>Checkbox3
				</label>
			</div>
			<?php if(isset($errCheckbox)) echo $errCheckbox; ?>
			<div class="form-group">
				<label>Textarea</label>
				<textarea class="form-control" rows="7" name="comment">
					<?php if(isset($comment)) echo $comment; ?>
				</textarea>
			</div>
			<p>Radio button</p>
			<div class="form-group">
				<div class="form-check-inline">
					<label class="form-check-label mr-3">
						<input type="radio" name="radioBtn" class="mr-2 form-check-input" value="yeb" <?php if(isset($radioChecked) && $radioChecked == "yeb") echo "checked"; ?>>yeb
					</label>
					<label class="form-check-label mr-3">
						<input type="radio" name="radioBtn" class="mr-2 form-check-input" value="nope" <?php if(isset($radioChecked) && $radioChecked == "nope") echo "checked"; ?>>nope
					</label>
					<label class="form-check-label mr-3">
						<input type="radio" name="radioBtn" class="mr-2 form-check-input" value="none" <?php if(isset($radioChecked) && $radioChecked == "none") echo "checked"; ?>>none
					</label>
				</div>
				<?php if(isset($errRadio)) echo $errRadio; ?>
			</div>
			<div class="form-group">
				<label>Select</label>
				<select class="form-control" name="select">
					<option value="option1"<?php if(isset($selectOpt) && $selectOpt == "option1") echo "selected"; ?>>Option 1</option>
					<option value="option2"<?php if(isset($selectOpt) && $selectOpt == "option2") echo "selected"; ?>>Option 2</option>
					<option value="option3"<?php if(isset($selectOpt) && $selectOpt == "option3") echo "selected"; ?>>Option 3</option>
				</select>
			</div>
			<div class="form-group">
				<label>Upload files</label>
				<input type="file" name="fileToUpload[]" class="form-control-file border" multiple="multiple">
			</div>
			<input type="submit" name="submitBtn" class="btn btn-primary form-control mt-5" value="Submit">
		</form>
		<?php if(isset($result)) echo $result; ?>
	</div>
</body>
</html>