<?php
	$str = "";
	for ($i=1; $i <= 50 ; $i++) { 
		$str .= $i."-";
	}
	echo substr($str, 0, -1);
?>