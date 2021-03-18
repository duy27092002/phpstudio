<!DOCTYPE html>
<html>
<head>
	<title>Exercise 6</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../front-end_framework/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<?php
			$data = array();;
			if ($_SERVER['REQUEST_METHOD'] == "POST") {
				$data['string'] = isset($_POST['string']) ? $_POST['string'] : '';
				$strToLower = strtolower($data['string']);
				$lenString = strlen($strToLower);
				$vowel = "/[^ueoai]/";
				$countVowel = 0;
				for ($index=0; $index <=($lenString-1) ; $index++) { 
					if (!preg_match($vowel, $strToLower[$index])) {
						$countVowel++;
					}
				}
				$result = "Số lượng nguyên âm có trong chuỗi là: $countVowel";
			}
		?>
		<div class="row mx-auto py-3 border">
			<div class="col-12 col-sm-12 col-md-4 col-lg-4">
				<h5>Search String</h5>
			</div>
			<div class="col-12 col-sm-12 col-md-8 col-lg-8">
				<form method="post">
					<input type="text" name="string" class="form-control mb-3" placeholder="Nhập chuỗi để tìm kiếm nguyên âm" value="<?php if(isset($data['string'])) echo $data['string'] ?>">
					<button type="submit" name="btnSubmut" class="btn btn-primary text-white">Submit</button>
				</form>
			</div>
		</div>
		<p class="text-info"><?php if(isset($result)) echo $result; ?></p>
	</div>
</body>
</html>