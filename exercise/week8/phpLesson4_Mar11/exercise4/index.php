<!DOCTYPE html>
<html>
<head>
	<title>Exercise 4</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../front-end_framework/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<?php
			if ($_SERVER['REQUEST_METHOD'] == "POST") {
				function isPalindrome($string){
					$lenStrUser = strlen($string);
					$newStr = "";
					for ($j=($lenStrUser-1); $j>=0 ; $j--) {
						$newStr.=$string[$j];
					}
					if ($string == $newStr) {
						return "<p class=\"text-success\">$string is palindrome</p>";
					} else {
						return "<p class=\"text-success\">$string is not palindrome</p>";
					}
				}
				$strUser = $_POST['strUser'];
				$result = isPalindrome(strtolower($strUser));
			}
		?>
	 	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	 		<input type="text" name="strUser" class="form-control my-3" value="<?php if(isset($strUser)) echo $strUser; ?>">
	 		<input type="submit" name="btnCheck" class="btn btn-primary mb-3" value="Check here!">
	 	</form>
	 	<?php if($_SERVER['REQUEST_METHOD'] == "POST") echo $result; ?>
	</div>
</body>
</html>