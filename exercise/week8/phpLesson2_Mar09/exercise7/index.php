<!DOCTYPE html>
<html>
<head>
	<title>Exercise 7</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../front-end_framework/bootstrap.min.css">
</head>
<body>
	<div class="container p-5">
		<table class="border">
			<tbody>
				<?php for ($i=1; $i <=8 ; $i++) { ?>
					<tr>
						<?php for ($j=1; $j <=8 ; $j++) { ?> 
							<td class="border"><?php
								$total = $i + $j;
								if ($total % 2 == 0) {
									echo "<span class=\"bg-dark p-2\"></span>";
								} else {
									echo "<span class=\"bg-white p-2\"></span>";
								}
							?></td>
						<?php } ?>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>