<!DOCTYPE html>
<html>
<head>
	<title>Exercise 3</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../front-end_framework/bootstrap.min.css">
</head>
<body>
	<div class="contanier bg-light">
		<?php
			if ($_SERVER['REQUEST_METHOD'] == "POST") {
				$txt = $_POST['text'];
				$textarea = $_POST['textarea'];
				$arrCheckbox = $_POST['checkbox'];
				$radioChecked = $_POST['radioBtn'];
				$selectOpt = $_POST['select'];
				if (empty($txt)) {
					$txtErr = "<small class=\"text-danger\">(*) Must not be left blank!";
				}
				if (empty($textarea)) {
					$textareaErr = "<small class=\"text-danger\">(*) Must not be left blank!";
				}
				foreach ($arrCheckbox as $checkboxOpt) {
					if ($checkboxOpt == "checkbox1") {
						$checkedOpt1 = "checked";
					} elseif ($checkboxOpt == "checkbox2") {
						$checkedOpt2 = "checked";
					} elseif ($checkboxOpt == "checkbox3") {
						$checkedOpt3 = "checked";
					} else{
						$checkboxErr = "Choose at least 1 choice!";
					}
				}
				if (empty($radioChecked)) {
					$radioErr = "<small class=\"text-danger\">(*) Choose at least 1 choice!";
				}
			}
		?>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype = "multiart / form-data" class="p-5">
			<div class="form-group">
				<label>Text</label>
				<input type="text" name="text" class="form-control" placeholder="Placeholder" value="<?php if(isset($txt)) echo $txt; ?>">
				<span><?php if(isset($txtErr)) echo $txtErr; ?></span>
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
			<span><?php if(isset($checkboxErr)) echo $checkboxErr; ?></span>
			<div class="form-group">
				<label>Textarea</label>
				<textarea class="form-control" rows="7">
					<?php if(isset($textarea)) echo $textarea; ?>
				</textarea>
				<span><?php if(isset($textareaErr)) echo $textareaErr; ?></span>
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
				<span><?php if(isset($radioErr)) echo $radioErr; ?></span>
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
				<input type="file" name="fileToUpload" class="form-control-file border">
			</div>
			<input type="submit" name="submitBtn" class="btn btn-primary form-control mt-5">
		</form>
	</div>
</body>
</html>