<?php
	$sentence = "Trường Đại học Hà Nội, học viện công nghệ thông tin-Hita";
	echo "Số lượng từ trong câu là: ".strlen($sentence);
	$replace_word = str_replace('học', '***', $sentence);
	echo "<br>Câu mới sau khi thay là: $replace_word";
?>