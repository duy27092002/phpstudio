<?php
	$error = array();
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		// validate form
		$errorMess = "<small class=\"text-danger\">(*) Không được để trống</small>";
		$checked = false;
		$countCheckbox = 0;
		if (empty($_POST['lastName'])) {
			$error['lastName'] = $errorMess;
		} else {
			$lastName = $_POST['lastName'];
		}
		if (empty($_POST['firstName'])) {
			$error['firstName'] = $errorMess;
		} else {
			$firstName = $_POST['firstName'];
		}
		if (empty($_POST['gender'])) {
			$gender = "";
		} else {
			$gender = $_POST['gender'];
		}
		if (empty($_POST['address'])) {
			$error['address'] = $errorMess;
		} else {
			$address = $_POST['address'];
		}
		if (empty($_POST['magazines'])) {
			$error['magazines'] = "<small class=\"text-danger\">(*) Phải chọn ít nhất 1 tạp chí</small>";
		} else {
			$magazines = $_POST['magazines'];
			foreach ($magazines as $value) {
				if ($value == "Time") {
					$checkValueTime = "checked";
				}
				if ($value == "Newsweek") {
					$checkValueNewsweek = "checked";
				}
				if ($value == "Sunday") {
					$checkValueSunday = "checked";
				}
				if ($value == "Vogue") {
					$checkValueVogue = "checked";
				}
				if ($value == "People") {
					$checkValuePeople = "checked";
				} 
			}
		}
		// listed magazine(s)
		if (isset($magazines)) {
			$countMagazine = count($magazines);
			$magalist = "";
			for ($i=0; $i <$countMagazine ; $i++) { 
				if ($i == ($countMagazine -1)) {
					$magalist .= $magazines[$i];
				} else {
					$magalist .= $magazines[$i].", ";
				}
			}
		}
		if (empty($_POST['year'])) {
			$year = "";
		} else {
			$year = $_POST['year'];
		}
		if (empty($_POST['payOpt'])) {
			$payOpt = "";
		} else {
			$payOpt = $_POST['payOpt'];
		}?>
		<!-- open Windows after fill full data -->
		<script>
			const openMess = confirm('Check your infomation again, please!');
			if (openMess) {
				$windowQuestion = confirm('<?php echo "Do you want to order $magalist magazines for $year and to pay with $payOpt?" ?>');
			}
			if ($windowQuestion) {
				alert('<?php echo"Thank you very much for you order, we will supply as soon as possible the magazines for you to the address: $firstName $lastName , address: $address" ?>');
			}
		</script>
<?php } ?>