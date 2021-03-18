<!DOCTYPE html>
<html>
<head>
	<title>Exercise 9</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../front-end_framework/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<table class="border p-3">
			<tbody>
				<?php for ($row=1; $row <=10 ; $row++) {?>
					<tr class="border">
						<?php for ($col=1; $col <=10 ; $col++) {
							$number = 10*($row-1)+$col;
							$isPrime = true;
							for ($k=2; $k <= sqrt($number) ; $k++) { 
								if ($number % $k === 0) {
									$isPrime = false;
									break;
								}
							}
							if ($isPrime == true && $number !== 1) {
								echo "<td class=\"bg-danger border p-2\">$number</td>";
							} else {
								echo "<td class=\"border p-2\">$number</td>";
							}
						} ?>
 					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>