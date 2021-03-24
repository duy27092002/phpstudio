<?php
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		session_start();
		$_SESSION['arrAnwserPage2'] = array();
		$_SESSION['arrAnwserPage2'][0] = $_POST['answer6'];
		$_SESSION['arrAnwserPage2'][1] = $_POST['answer7'];
		$_SESSION['arrAnwserPage2'][2] = $_POST['answer8'];
		$_SESSION['arrAnwserPage2'][3] = $_POST['answer9'];
		$_SESSION['arrAnwserPage2'][4] = $_POST['answer10'];
		$_SESSION['correctAnwserPage2'] = ["A", "C", "D", "B", "B"];
		$checkAnswerPage2 = array_diff_assoc($_SESSION['arrAnwserPage2'], $_SESSION['correctAnwserPage2']);
		$countDiffPage2 = count($checkAnswerPage2);
		$_SESSION['pointPage2'] = (5-$countDiffPage2);
		$pointSum = ($_SESSION['pointPage1'] + $_SESSION['pointPage2']);
		if ($pointSum >= 8) {
			echo "$pointSum điểm! Sắp sửa làm được trợ giảng lớp 1 rồi!";
		} elseif ($pointSum >= 4 && $pointSum <= 7) {
			echo "$pointSum điểm! Cũng bình thường";
		} else{
			echo "$pointSum điểm! Bạn quá kém so với quy định";
		}
		session_unset();
		session_destroy();
	}
?>