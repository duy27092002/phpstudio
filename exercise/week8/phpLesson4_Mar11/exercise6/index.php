<?php
	function group($arr, $elementNumber){
		$countValue = count($arr);
		$arrPush = array();
		$arrResult = array();
		for ($index=0; $index <$countValue ; $index++) { 
			array_push($arrPush, $arr[$index]);
			if (count(array_push($arrPush, $arr[$index])) == $elementNumber) {
				array_push($arrResult, $arr[$index]);
			}
		}
		foreach ($arrResult as $value) {
			print_r($value);
		}
	}
	$arr = [1,2,3,4,5,6,7,8,9];
	$elementNumber = 2;
	echo group($arr, $elementNumber);
?>