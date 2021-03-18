<?php
	$arrInteger = [5,8,1,-8,9,10,100];
	$count = count($arrInteger);
	echo "Phần tử nhỏ nhất có giá trị là: ".min($arrInteger);
	echo "<br>Phần tử lớn nhất có giá trị là: ".max($arrInteger);
	$arrIntegerSum = array_sum($arrInteger);
	$arrIntegerAvg = $arrIntegerSum / $count;
	echo "<br>Giá trị trung bình các phần tử trong mảng là: ".$arrIntegerAvg;
?>