<?php
	$powerNumber = 1900;
	$mess1 = "Tiền điện trước khi tính thuế là: ";
	$mess2 = "Tiền điện sau khi tính thuế là: ";
	$rootPrice1 = $powerNumber*450;
	if ($powerNumber<=100) {
		echo $mess1.$rootPrice1."<br>";
		echo $mess2.($rootPrice1+0.1*$rootPrice1);
	}
	else if ($powerNumber > 100 && $powerNumber <= 200) {
		$rootPrice2 = ($powerNumber - 100)*600 + 100*450;
		echo $mess1.$rootPrice2."<br>";
		echo $mess2.($rootPrice2+0.1*$rootPrice2);
	}
	else if ($powerNumber > 200 && $powerNumber <= 300) {
		$rootPrice3 = 100*(450+600)+($powerNumber-200)*750;
		echo $mess1.$rootPrice3."<br>";
		echo $mess2.($rootPrice3+0.1*$rootPrice3);
	}
	else if ($powerNumber > 300 && $powerNumber <= 500) {
		$rootPrice4 = 100*(450+600+750)+($powerNumber-300)*900;
		echo $mess1.$rootPrice4."<br>";
		echo $mess2.($rootPrice4+0.1*$rootPrice4);
	}
	else if ($powerNumber > 500 && $powerNumber <= 1000) {
		$rootPrice5 = 100*(450+600+750)+(200*900)+($powerNumber-500)*1000;
		echo $mess1.$rootPrice5."<br>";
		echo $mess2.($rootPrice5+0.1*$rootPrice5); 
	}
	else {
		$rootPrice6 = 100*(450+600+750)+(200*900+500*1000)+($powerNumber-1000)*1200;
		echo $mess1.$rootPrice6."<br>";
		echo $mess2.($rootPrice6+0.1*$rootPrice6);
	}
?>