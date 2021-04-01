<?php
	include '../models/bank.php';
	$account = new Bank(1000, 123);
	echo $account->deductAmount();
?>