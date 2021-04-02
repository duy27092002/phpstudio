<?php
	include '../models/phone.php';
	$phone = new iOS();
	$phone->makeCall('0123456');
	$phone->sendMessage('Try hard!');
?>