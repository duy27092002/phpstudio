<!DOCTYPE html>
<html>
<head>
	<title>Exercise 5</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../front-end_framework/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<?php
			$error = array();
			if ($_SERVER['REQUEST_METHOD'] == "POST") {
				$errEmptyData = "Không được để trống dữ liệu!";
				$errTypeData = "Chỉ cho phép nhập số!";
				// check firstNumber
				if (empty($_POST['firstNumber'])) {
					$error['firstNumber'] = $errEmptyData;
				} elseif (is_numeric($_POST['firstNumber']) === false) {
					$error['firstNumber'] = $errTypeData;
				} else {
					$firstNumber = $_POST['firstNumber'];
				}
				// check secondNumber
				if (empty($_POST['secondNumber'])) {
					$error['secondNumber'] = $errEmptyData;
				} elseif (is_numeric($_POST['secondNumber']) === false) {
					$error['secondNumber'] = $errTypeData;
				} else {
					$secondNumber = $_POST['secondNumber'];
				}
				// caculate
				if (isset($_POST['plus'])) {
					$sum = $firstNumber + $secondNumber;
				}
				if (isset($_POST['minus'])) {
					$minus = $firstNumber - $secondNumber;
				}
				if (isset($_POST['multiply'])) {
					$multiply = $firstNumber * $secondNumber;
				}
				if (isset($_POST['divide'])) {
					$divide = $firstNumber / $secondNumber;
				}
			}
		?>
		<div class="mx-auto p-5 border">
			<h5 class="text-center p-3 bg-light">Thực hành toán tử</h5>
			<form action="" method="post">
				<div class="form-group">
					<label>Nhập số a</label>
					<input type="text" name="firstNumber" class="form-control" value=
					"<?php if (isset($firstNumber) && !empty($firstNumber)) echo $firstNumber; ?>">
					<?php
						if (isset($error['firstNumber'])) { ?>
							<span class="text-danger"><?php echo $error['firstNumber']; ?></span>
					<?php } ?>
				</div>
				<div class="form-group">
					<label>Nhập số b</label>
					<input type="text" name="secondNumber" class="form-control" value=
					"<?php if (isset($secondNumber) && !empty($secondNumber)) echo $secondNumber; ?>">
					<?php
						if (isset($error['secondNumber'])) { ?>
							<span class="text-danger"><?php echo $error['secondNumber']; ?></span>
					<?php } ?>
				</div>
				<div class="form-group">
					<button type="submit" name="plus" class="btn btn-success text-white">a + b</button>
					<button type="submit" name="minus" class="btn btn-info text-white">a - b</button>
					<button type="submit" name="multiply" class="btn btn-danger text-white">a * b</button>
					<button type="submit" name="divide" class="btn btn-warning text-white">a / b</button>
				</div>
				<?php
					if (isset($_POST['plus']) && !empty($secondNumber) && !empty($firstNumber)) { ?>
						<span class="text-info">a + b = <?php echo $sum ; ?> </span>
					<?php } ?>
				<?php
					if (isset($_POST['minus']) && !empty($secondNumber) && !empty($firstNumber)) { ?>
						<span class="text-info">a - b = <?php echo $minus ; ?> </span>
					<?php } ?>
				<?php
					if (isset($_POST['multiply']) && !empty($secondNumber) && !empty($firstNumber)) { ?>
						<span class="text-info">a * b = <?php echo $multiply ; ?> </span>
					<?php } ?>	
				<?php
					if (isset($_POST['divide']) && !empty($secondNumber) && !empty($firstNumber)) { ?>
						<span class="text-info">a / b = <?php echo $divide ; ?> </span>
					<?php } ?>	
			</form>
		</div>
	</div>
</body>
</html>