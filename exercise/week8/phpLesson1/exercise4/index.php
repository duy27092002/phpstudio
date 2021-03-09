<?php
	$productCode = "EV2009";
	$productName = "Tấm hợp kim nhôm ngoài trời ";
	$amout = 500;
	$VAT = 0.05;
	$price = 160000;
	echo "<h3>".$productName.$productCode."</h3>";
	echo "Giá: ".$price." VNĐ<br>";
	echo "Số lượng: ".$amout."<br>";
	echo "Thuế VAT: ".$VAT."<br>";
	echo "Trước khi trừ thuế: ".($amout*$price)." VNĐ<br>";
	echo "Sau khi trừ thuế: ".($amout*$price*$VAT)." VNĐ";
?>