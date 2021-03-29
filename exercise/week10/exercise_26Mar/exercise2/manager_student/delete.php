<?php
	require ('../config/connection.php');
	$idStudent = $_GET['id'];
	$sql = "DELETE FROM students WHERE id_student = $idStudent";
	if (mysqli_query($conn, $sql)) {
		header('location:view_students.php');
	}
?>