<?php
	include '../models/animal.php';
	
	$dog = new Dog("Dog", "", "5 kg", "black");
	$dog->checkSound();
	$dog->checkHunting();
	echo "<br>";

	$tiger = new Tiger("Tiger", "", "10kg");
	$tiger->checkSound();
	$tiger->checkHunting();
?>