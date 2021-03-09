<?php
	$number = 0;
	if ($number % 2 == 0 && $number !== 0) {
		echo $number." là số chẵn";
	} elseif($number % 2 !== 0) {
		echo $number." là số lẻ";
	} else{
		echo $number." không phải số chẵn, số lẻ";
	}
?>