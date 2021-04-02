<?php
	include '../models/database.php';
	$DBConnection = new DBConnection('Ahihi', false);
	$DBConnection->setConnection('dbName');// if this statement was commented, output would not print at getConnection function
	$DBConnection->getConnection();
?>