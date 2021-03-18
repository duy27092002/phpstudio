<!DOCTYPE html>
<html>
<head>
	<title>Exercise 2</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../front-end_framework/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<?php
			if ($_SERVER['REQUEST_METHOD'] == "POST") {
				$str = 'Write a function countWords($str) that takes any string of characters and finds the number of times each string occurs.';
				function searchWords($str) {
					$arrExplode = explode(" ", $str);
					$countArrExplode = count($arrExplode);
					$arrWordsCounted = array();
					for ($i=0; $i <$countArrExplode ; $i++) { 
						$count = 0;
						foreach ($arrExplode as $value) {
							if ($arrExplode[$i] == $value) {
								$count++;
							}
						}
						$arrWordsCounted[$arrExplode[$i]] = $count;
					}
					return $arrWordsCounted;
				}
				searchWords($str);
				foreach ($arrWordsCounted as $key => $value) {
					if ($_POST['strSearch'] ==  $key) {
						$resultCount = "$key: $value";
					} else {
						$resultCount = "$key: 0";
					}
				}
			}
		?>
		<h5 class="text-muted text-center"><?php if(isset($str)) echo "My original string:<br><small>$str</small>"; ?></h5>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="w-50 mx-auto pt-3">
			<input type="text" name="strSearch" class="form-control mb-3">
			<input type="submit" name="btnSearch" value="Search" class="btn btn-primary">
		</form>
		<div class="row">
			<?php if(isset($resultCount)) echo $resultCount; ?>
		</div>
	</div>
</body>
</html>