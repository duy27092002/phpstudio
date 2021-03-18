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
			if ($_SERVER['REQUEST_METHOD'] == "POST") {
				function reverse($dataUser){
					$lenStr = strlen($dataUser);
					$newStr = "";
					$isNumeric = is_numeric($dataUser);
					if ($isNumeric && $dataUser[0] == "-" && $dataUser[$lenStr-1] !== 0) {
						for ($i=($lenStr-1); $i >=1 ; $i--) { 
							$newStr.=$dataUser[$i];
						}
						return -$newStr;
					} elseif ($isNumeric && $dataUser[$lenStr-1] == 0 && $dataUser[0]  !== "-") {
						for ($i=($lenStr-2); $i >=0 ; $i--) { 
							$newStr.=$dataUser[$i];
						}
						return $newStr;
					} elseif ($isNumeric && $dataUser[$lenStr-1] == 0 && $dataUser[0] == "-") {
						for ($i=($lenStr-2); $i >=1 ; $i--) { 
							$newStr.=$dataUser[$i];
						}
						return -$newStr;
					} else {
						for ($i=($lenStr-1); $i>=0 ; $i--) {
							$newStr.=$dataUser[$i];
						}
						return $newStr;
					}
				}
				$dataUser = $_POST['dataUser'];
				$result = reverse($dataUser);
			}
		?>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<input type="text" name="dataUser" class="form-control my-3" value="<?php if(isset($dataUser)) echo $dataUser ?>">
			<input type="submit" name="btnReverse" class="btn btn-primary mb-3" value="Reverse">
		</form>
		<p><?php if($_SERVER['REQUEST_METHOD'] == "POST") echo $result; ?></p>
	</div>
</body>
</html>