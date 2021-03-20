<?php
	$error = array();
	$data = array();
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		// get data of input
		$data['firstName'] = isset($_POST['firstName']) ? $_POST['firstName'] : "";
		$data['lastName'] = isset($_POST['lastName']) ? $_POST['lastName'] : "";
		$data['email'] = isset($_POST['email']) ? $_POST['email'] : "";
		$data['state'] = isset($_POST['state']) ? $_POST['state'] : "";
		// check data
		if (empty($data['firstName'])) {
			$error['firstName'] = "<small class=\"text-danger\">Firstname không được để trống</small>";
		}
		if (empty($data['lastName'])) {
			$error['lastName'] = "<small class=\"text-danger\">Lastname không được để trống</small>";
		}
		if (empty($data['email'])) {
			$error['email'] = "<small class=\"text-danger\">Email không được để trống</small>";
		}
		if (empty($_POST['hobby'])) {
			$data['hobby'] = "";
		} else {
			$data['hobby'] = $_POST['hobby'];
			foreach ($data['hobby'] as $hobbyName) {
				if ($hobbyName == "Badmintion") {
					$badmintion = "checked";
				}
				if ($hobbyName == "Football") {
					$football = "checked";
				}
				if ($hobbyName == "Bicycle") {
					$bicycle = "checked";
				}
			}
		}
		if ($data['state'] == "Johor") {
			$checkedJohor = "selected";
		}
		if ($data['state'] == "Massachusetts") {
			$checkedMassachusetts = "selected";
		}
		if ($data['state'] == "Washington") {
			$checkedWashington = "selected";
		}
		if (empty($error)) {
			$countArrHobby = count($data['hobby']);
			$hobbiesList = "";
			for ($i=0; $i <$countArrHobby ; $i++) { 
				if ($i == $countArrHobby -1) {
					$hobbiesList .= " ".$data['hobby'][$i];
				} else {
					$hobbiesList .= $data['hobby'][$i].", ";
				}
			}
			$result = "<p class=\"text-info text-center\">Firstname: ".$data['firstName']."<br>Lastname: ".$data['lastName']."<br>Email: ".$data['email'].
					"<br>Gender: ".$_POST['gender']."<br>State: ".$data['state'].
					"<br>Hobby: ".$hobbiesList."</p>";
		}
	}
?>