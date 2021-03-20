<?php
	$error = array();
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$errorMess = "<small class=\"text-danger\">Không được để trống</small>";
		$errFormat = "<small class=\"text-danger\">Sai định dạng</small>";
		$correctEmailFormat = "/^\w+@\w+\.\w+$/";
		$correctPhoneNumberFormat = "/^[0-9]+$/";
		if (empty($_POST['name'])) {
			$error['name'] = $errorMess;
		} else {
			$name = $_POST['name'];
		}
		if (empty($_POST['email'])) {
			$error['email'] = $errorMess;
		} elseif (!preg_match($correctEmailFormat, $_POST['email'])) {
			$error['email'] = $errFormat;
		} else{
			$email = $_POST['email']; 
		}
		if (empty($_POST['phoneNumber'])) {
			$error['phoneNumber'] = $errorMess; 
		} elseif (!preg_match($correctPhoneNumberFormat, $_POST['phoneNumber'])) {
			$error['phoneNumber'] = "Chỉ được nhập số";
		} else {
			$phoneNumber = $_POST['phoneNumber'];
		}
		if (empty($_POST['website'])) {
			$error['website'] = $errorMess ;
		} else {
			$website = $_POST['website'];
		} 
		if (empty($_POST['message'])) {
			$error['message'] = $errorMess;
		} else {
			$message = $_POST['message'];
		}
		if (empty($error)) {
			$result = "Name: $name<br>Email: $email<br>Phonenumber: $phoneNumber<br>Your Website: $website<br>Your Message: $message
				";
		}
	}
?>