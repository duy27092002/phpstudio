<!DOCTYPE html>
<html>
<head>
	<title>Practice 3 (Page 2)</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../front-end_framework/bootstrap.min.css">
</head>
<body>
	<div class="contanier p-3">
		<?php
			session_start();
			$_SESSION['arrAnwserPage1'] = array();
			$_SESSION['arrAnwserPage1'][0] = $_POST['answer1'];
			$_SESSION['arrAnwserPage1'][1] = $_POST['answer2'];
			$_SESSION['arrAnwserPage1'][2] = $_POST['answer3'];
			$_SESSION['arrAnwserPage1'][3] = $_POST['answer4'];
			$_SESSION['arrAnwserPage1'][4] = $_POST['answer5'];
			$_SESSION['correctAnwserPage1'] = ["A", "D", "B", "B", "D"];
			$checkAnswerPage1 = array_diff_assoc($_SESSION['arrAnwserPage1'], $_SESSION['correctAnwserPage1']);
			$countDiffPage1 = count($checkAnswerPage1);
			$_SESSION['pointPage1'] = (5-$countDiffPage1);
		?>
		<form class="bg-light text-center" action="result.php" method="post">
			<div class="form-group mb-3">
				<h4>6: <span class="text-info">12 + 5 = ?</span></h4>
				<div class="form-check-inline">
					<label class="form-check-label mr-4">
						<input value="A" type="radio" name="answer6" class="form-check-input mr-2">A: 17
					</label>
					<label class="form-check-label mr-4">
						<input value="B" type="radio" name="answer6" class="form-check-input mr-2">B: 18
					</label>
					<label class="form-check-label mr-4">
						<input value="C" type="radio" name="answer6" class="form-check-input mr-2">C: 19
					</label>
					<label class="form-check-label mr-4">
						<input value="D" type="radio" name="answer6" class="form-check-input mr-2">D: 20
					</label>
				</div>
			</div>
			<div class="form-group mb-3">
				<h4>7: <span class="text-info">5 + 45 = ?</span></h4>
				<div class="form-check-inline">
					<label class="form-check-label mr-4">
						<input value="A" type="radio" name="answer7" class="form-check-input mr-2">A: 74
					</label>
					<label class="form-check-label mr-4">
						<input value="B" type="radio" name="answer7" class="form-check-input mr-2">B: 81
					</label>
					<label class="form-check-label mr-4">
						<input value="C" type="radio" name="answer7" class="form-check-input mr-2">C: 50
					</label>
					<label class="form-check-label mr-4">
						<input value="D" type="radio" name="answer7" class="form-check-input mr-2">D: 51
					</label>
				</div>
			</div>
			<div class="form-group mb-3">
				<h4>8: <span class="text-info">10 + 51 = ?</span></h4>
				<div class="form-check-inline">
					<label class="form-check-label mr-4">
						<input value="A" type="radio" name="answer8" class="form-check-input mr-2">A: 31
					</label>
					<label class="form-check-label mr-4">
						<input value="B" type="radio" name="answer8" class="form-check-input mr-2">B: 65
					</label>
					<label class="form-check-label mr-4">
						<input value="C" type="radio" name="answer8" class="form-check-input mr-2">C: 30
					</label>
					<label class="form-check-label mr-4">
						<input value="D" type="radio" name="answer8" class="form-check-input mr-2">D: 61
					</label>
				</div>
			</div>
			<div class="form-group mb-3">
				<h4>9: <span class="text-info">15 + 55 = ?</span></h4>
				<div class="form-check-inline">
					<label class="form-check-label mr-4">
						<input value="A" type="radio" name="answer9" class="form-check-input mr-2">A: 72
					</label>
					<label class="form-check-label mr-4">
						<input value="B" type="radio" name="answer9" class="form-check-input mr-2">B: 70
					</label>
					<label class="form-check-label mr-4">
						<input value="C" type="radio" name="answer9" class="form-check-input mr-2">C: 80
					</label>
					<label class="form-check-label mr-4">
						<input value="D" type="radio" name="answer9" class="form-check-input mr-2">D: 210
					</label>
				</div>
			</div>
			<div class="form-group mb-3">
				<h4>10: <span class="text-info">25 + 25 = ?</span></h4>
				<div class="form-check-inline">
					<label class="form-check-label mr-4">
						<input value="A" type="radio" name="answer10" class="form-check-input mr-2">A: 25
					</label>
					<label class="form-check-label mr-4">
						<input value="B" type="radio" name="answer10" class="form-check-input mr-2">B: 50
					</label>
					<label class="form-check-label mr-4">
						<input value="C" type="radio" name="answer10" class="form-check-input mr-2">C: 65
					</label>
					<label class="form-check-label mr-4">
						<input value="D" type="radio" name="answer10" class="form-check-input mr-2">D: 100
					</label>
				</div>
			</div>
			<input type="submit" name="next" class="btn btn-success" value="Finish">
		</form>
		<p><strong class="text-danger">Note: </strong>Phải hoàn thành hết tất cả các câu!</p>
	</div>
</body>
</html>