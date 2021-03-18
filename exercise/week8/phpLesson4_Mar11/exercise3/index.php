<!DOCTYPE html>
<html>
<head>
	<title>Exercise 3</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../front-end_framework/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<?php
			if ($_SERVER['REQUEST_METHOD'] == "POST") {
				function daysInMonth($month){
					switch ($month) {
						case '1':
							return	"Jan: 31 days";
						case '2':
							return	"Feb: 28 days";
						case '3':
							return	"Mar: 31 days";
						case '4':
							return	"Apr: 30 days";
						case '5':
							return	"May: 31 days";
						case '6':
							return	"Jun: 30 days";
						case '7':
							return	"Jul: 31 days";
						case '8':
							return	"Aug: 31 days";
						case '9':
							return	"Sep: 30 days";
						case '10':
							return	"Oct: 31 days";
						case '11':
							return	"Nov: 30 days";
						case '12':
							return	"Dec: 31 days";
						default:
							return	"<small class=\"text-danger\Không hợp lệ!</small>";
					}
				}
				$result=daysInMonth($_POST['month']);
			}
		?>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<input type="text" name="month" class="form-control my-3" value="<?php if(isset($_POST['month'])) echo $_POST['month'] ?>">
			<input type="submit" name="btnSubmit" value="Check!" class="btn btn-primary mb-3">
		</form>
		<p class="text-info">
			<?php if($_SERVER['REQUEST_METHOD'] == "POST") echo $result; ?>
		</p>
	</div>
</body>
</html>