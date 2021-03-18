<?php
	echo "<h3>Các số chia hết cho m trong khoảng từ 20 đến 50 gồm:</h3>";
	$n = 21;
	while ($n < 50) {
		if ($n % 3 == 0) {
			echo $n."<br>";
		}
		$n++;
	}
?>