<!DOCTYPE html>
<html lang="en">
<head>
	<title>Exercise 1</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../front-end_framework/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<?php
			if ($_SERVER['REQUEST_METHOD'] == "POST") {
				$allowTypes = array('jpg', 'png', 'jpeg', 'gif');
				$maxFileSizes = 2097152;
				$imgFileName = $_FILES['imgFileName']['name'];
				$extensionFile = pathinfo($imgFileName, PATHINFO_EXTENSION);
				if (!in_array($extensionFile, $allowTypes)) {
					$extensionError = "<small class=\"text-danger\">Need to upload an image file</small>";
				}
				if ($_FILES['imgFileName']['size'] > $maxFileSizes) {
					$sizesError = "<small class=\"text-danger\">File upload cannot be > 1Mb</small>";
				}
				if (!isset($extensionError) && !isset($sizesError)) {
					echo "<span><img src=\"images/$imgFileName\"></span>";
					echo "<br><span class=\"text-success\">File name: $imgFileName</span>";
					echo "<br><span class=\"text-success\">File type: $extensionFile</span>";
				}
			}
		?>
		<div class="mx-auto p-3 bg-light">
			<h1>Select a file to upload</h1>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
				<input type="file" name="imgFileName">
				<p class="text-muted mt-2">Only jpg, jpeg, png and gif file will maximum size of 1MB is allowed.</p>
				<input type="submit" name="btnUpload" class="btn btn-info my-3" value="Upload">
			</form>
		</div>
		<?php if($_SERVER['REQUEST_METHOD'] == "POST" && isset($extensionError)) echo $extensionError ; ?>
		<?php if($_SERVER['REQUEST_METHOD'] == "POST" && isset($sizesError)) echo $sizesError ; ?>
	</div>
</body>
</html>