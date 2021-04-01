<?php
	include '../models/employee.php';
	$salaryAmount = new Employee('John','2', '20');
	echo $salaryAmount->getSalaryAmount();
?>