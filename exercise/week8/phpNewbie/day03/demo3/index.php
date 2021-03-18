<?php
	$name = "Tr49ng Dai h9c Ha N9i";
	echo "Tên ban đầu: $name <br>";
	$name = str_replace('4', 'u', $name);
	$name = str_replace('9', 'o', $name);
	echo "Tên sau khi đổi ký tự: $name<br>";
	echo "Độ dài của tên: ".strlen($name)."<br>";
	$shortName = substr($name, 7);
	echo "Tên rút gọn: ".$shortName."<br>";
	$level = substr($name,7,7);
	echo "Loại hình đào tạo: ".$level;
?>