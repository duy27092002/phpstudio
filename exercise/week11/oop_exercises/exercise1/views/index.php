<?php
	include '../models/employee.php';
	$salaryAmount = new Employee('John','4', '20');
	echo $salaryAmount->getSalaryAmount();
?>