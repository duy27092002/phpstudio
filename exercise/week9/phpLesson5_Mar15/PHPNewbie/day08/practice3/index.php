<!DOCTYPE html>
<html>
<head>
	<title>Practice 3 (Page 1)</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../front-end_framework/bootstrap.min.css">
</head>
<body>
	<div class="contanier p-3">
		<form class="bg-light text-center" action="page2.php" method="post">
			<div class="form-group mb-3">
				<h4>1: <span class="text-info">2 + 5 = ?</span></h4>
				<div class="form-check-inline">
					<label class="form-check-label mr-4">
						<input value="A" type="radio" name="answer1" class="form-check-input mr-2">A: 7
					</label>
					<label class="form-check-label mr-4">
						<input value="B" type="radio" name="answer1" class="form-check-input mr-2">B: 8
					</label>
					<label class="form-check-label mr-4">
						<input value="C" type="radio" name="answer1" class="form-check-input mr-2">C: 9
					</label>
					<label class="form-check-label mr-4">
						<input value="D" type="radio" name="answer1" class="form-check-input mr-2">D: 10
					</label>
				</div>
			</div>
			<div class="form-group mb-3">
				<h4>2: <span class="text-info">5 + 5 = ?</span></h4>
				<div class="form-check-inline">
					<label class="form-check-label mr-4">
						<input value="A" type="radio" name="answer2" class="form-check-input mr-2">A: 7
					</label>
					<label class="form-check-label mr-4">
						<input value="B" type="radio" name="answer2" class="form-check-input mr-2">B: 8
					</label>
					<label class="form-check-label mr-4">
						<input value="C" type="radio" name="answer2" class="form-check-input mr-2">C: 9
					</label>
					<label class="form-check-label mr-4">
						<input value="D" type="radio" name="answer2" class="form-check-input mr-2">D: 10
					</label>
				</div>
			</div>
			<div class="form-group mb-3">
				<h4>3: <span class="text-info">10 + 5 = ?</span></h4>
				<div class="form-check-inline">
					<label class="form-check-label mr-4">
						<input value="A" type="radio" name="answer3" class="form-check-input mr-2">A: 7
					</label>
					<label class="form-check-label mr-4">
						<input value="B" type="radio" name="answer3" class="form-check-input mr-2">B: 15
					</label>
					<label class="form-check-label mr-4">
						<input value="C" type="radio" name="answer3" class="form-check-input mr-2">C: 9
					</label>
					<label class="form-check-label mr-4">
						<input value="D" type="radio" name="answer3" class="form-check-input mr-2">D: 10
					</label>
				</div>
			</div>
			<div class="form-group mb-3">
				<h4>4: <span class="text-info">15 + 5 = ?</span></h4>
				<div class="form-check-inline">
					<label class="form-check-label mr-4">
						<input value="A" type="radio" name="answer4" class="form-check-input mr-2">A: 22
					</label>
					<label class="form-check-label mr-4">
						<input value="B" type="radio" name="answer4" class="form-check-input mr-2">B: 20
					</label>
					<label class="form-check-label mr-4">
						<input value="C" type="radio" name="answer4" class="form-check-input mr-2">C: 19
					</label>
					<label class="form-check-label mr-4">
						<input value="D" type="radio" name="answer4" class="form-check-input mr-2">D: 21
					</label>
				</div>
			</div>
			<div class="form-group mb-3">
				<h4>5: <span class="text-info">25 + 5 = ?</span></h4>
				<div class="form-check-inline">
					<label class="form-check-label mr-4">
						<input value="A" type="radio" name="answer5" class="form-check-input mr-2">A: 27
					</label>
					<label class="form-check-label mr-4">
						<input value="B" type="radio" name="answer5" class="form-check-input mr-2">B: 28
					</label>
					<label class="form-check-label mr-4">
						<input value="C" type="radio" name="answer5" class="form-check-input mr-2">C: 29
					</label>
					<label class="form-check-label mr-4">
						<input value="D" type="radio" name="answer5" class="form-check-input mr-2">D: 30
					</label>
				</div>
			</div>
			<input type="submit" name="next" class="btn btn-primary" value="Next">
		</form>
		<p><strong class="text-danger">Note: </strong>Phải hoàn thành hết tất cả các câu!</p>
	</div>
</body>
</html>