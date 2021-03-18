<?php
	function capitalize($str){
		$explodeStrToArr = explode(" ", $str);
		$newStr = "";
		$countValue = count($explodeStrToArr);
		for ($i=0; $i <$countValue ; $i++) { 
			$newStr.=ucfirst($explodeStrToArr[$i])." ";
		}
		return $newStr;
	}
	$str = "Try it yourself";
	echo capitalize($str);
?>