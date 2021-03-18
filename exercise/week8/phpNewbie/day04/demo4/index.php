<?php
	const N = 10;
	const X = "STRING";
	$arrDemo = ["1", "dog", "String", "duck", "10"];
	if (N == $arrDemo[0] || N == $arrDemo[1] || N == $arrDemo[2] ||
	    N == $arrDemo[3] || N == $arrDemo[4]) {
		echo "There is an overlap (check for const N)<br>";
	} else {
		echo "There is not an overlap (check for const N)<br>";
	}
	if (X == $arrDemo[0] || X == $arrDemo[1] || X== $arrDemo[2] ||
	    X == $arrDemo[3] || X == $arrDemo[4]) {
		echo "There is an overlap (check for const X)<br>";
	} else {
		echo "There is not an overlap (check for const X)<br>";
	}		
?>