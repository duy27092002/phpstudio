<?php
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$errMess = "<small class=\"text-danger\">(*) Must not be left blank!</small>";
		$errChoice = "<small class=\"text-danger\">(*) Choose at least 1 choice!</small>";
		$txt = $_POST['text'];
		$comment = $_POST['comment'];
		$selectOpt = $_POST['select'];
		if (empty($txt)) {
			$txtErr = $errMess;
			$error = true;
		}
		if (empty($_POST['checkbox'])) {
			$errCheckbox = $errChoice;
			$error = true;
		} else {
			$arrCheckbox = $_POST['checkbox'];
			foreach ($arrCheckbox as $checkboxOpt) {
				if ($checkboxOpt == "checkbox1") {
					$checkedOpt1 = "checked";
				}
				if ($checkboxOpt == "checkbox2") {
					$checkedOpt2 = "checked";
				}
				if ($checkboxOpt == "checkbox3") {
					$checkedOpt3 = "checked";
				}
			}
		}
		if (isset($arrCheckbox)) {
			$countArrCheckbox = count($arrCheckbox);
			$optList = "";
			for ($i=0; $i <$countArrCheckbox ; $i++) { 
				if ($i == ($countArrCheckbox-1)) {
					$optList.=$arrCheckbox[$i];
				} else {
					$optList.=$arrCheckbox[$i].", ";
				}
			}
		}
		if (empty($_POST['radioBtn'])) {
			$errRadio = $errChoice;
			$error = true;
		} else {
			$radioChecked = $_POST['radioBtn'];
		}
		if (empty($_FILES['fileToUpload']['name'])) {
			$arrFilesName = "";
		} else {
			$arrFilesName = array();
			foreach ($_FILES['fileToUpload']['name'] as $fileName) {
				$arrFilesName[] = $fileName;
			}
			$countFilesName = count($arrFilesName);
			$showImg = "";
			for ($i=0; $i <$countFilesName ; $i++) { 
				$showImg .= "<img src=\"images/$arrFilesName[$i]\"><br>";
			}
		}
		if (!$error) {
			$result =  "<span class=\"text-info pl-5\">Text: $txt</span>"
			. "<br><span class=\"text-info pl-5\">Checkbox: $optList</span>"
			. "<br><span class=\"text-info pl-5\">Textarea: $comment</span>"
			. "<br><span class=\"text-info pl-5\">Radio: $radioChecked</span>"
			. "<br><span class=\"text-info pl-5\">Select: $selectOpt</span>"
			. "<br><span class=\"text-info pl-5\">Upload files: $showImg</span>";
		}
	}
?>