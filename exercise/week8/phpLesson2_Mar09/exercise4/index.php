<?php
	$sum = 0;
	$squareSum = 0;
	for ($i = 1; $i <= 100 ; $i++) { 
		$sum += $i;
		$squareSum += $i * $i;
		if ($i == 50) {
			break;
		}
	}
	echo "Tổng của 100 số nguyên đầu tiên bằng: ".$sum;
	echo "<br>Tổng các bình phương bằng: ".$squareSum;
?>