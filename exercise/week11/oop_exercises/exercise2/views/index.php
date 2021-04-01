<?php
	include '../models/bank.php';
	$account = new Bank(10, 123);
	echo $account->depositAmount();
	echo "<br>";
	echo $account->deductAmount();
?>