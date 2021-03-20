<?php
	$error = array();
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$emptyErr = "must not be left blank!";
		$userName = $_POST['userName'];
		$email = $_POST['email'];
		$emailFormat = "/\w+@\w+\.[a-z]{3}/";
		$psw = $_POST['password'];
		$confirmPsw = $_POST['confirmPsw'];
		$avatar = $_FILES['avatar']['name'];
		$imageFileType = pathinfo($avatar,PATHINFO_EXTENSION);
		$imageFileSize = $_FILES['avatar']['size'];
		if (empty($userName)) {
			$error['userName'] = "<small class=\"text-danger\">(*) Username $emptyErr</small>";
		}
		if (empty($email)) {
			$error['email'] = "<small class=\"text-danger\">(*) Email $emptyErr</small>";
		}
		if (!empty($email) && !preg_match($emailFormat, $email)) {
			$error['email'] = "<small class=\"text-danger\">(*) Email invalidate</small>";
		}
		if (empty($psw)) {
			$error['password'] = "<small class=\"text-danger\">(*) Password $emptyErr</small>";
		}
		if (empty($confirmPsw)) {
			$error['confirmPsw'] = "<small class=\"text-danger\">(*) Confirm password $emptyErr</small>";
		}
		if (!empty($confirmPsw) && $confirmPsw !== $psw) {
			$error['confirmPsw'] = "<small class=\"text-danger\">(*) Confirm password must be the same as the <strong>password</strong></small>";
		}
		/*if (empty($avatar)) {
			$error['avatar'] = "<small class=\"text-danger\">(*) Need upload avatar</small>";
		}*/
		if(empty($error)) {
			$result = "<span class=\"text-white\">Username: $userName</span>"
				."<br><span class=\"text-white\">Email: $email</span>"
				."<br><span class=\"text-white\">Avatar: <img src=\"images/$avatar\"></span>"
				."<br><span class=\"text-white\">File name: $avatar</span>"
				."<br><span class=\"text-white\">File type: $imageFileType</span>"
				."<br><span class=\"text-white\">File size: $imageFileSize</span>";
		}
	}
?>