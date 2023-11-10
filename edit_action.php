<?php
require_once("database_connection.php");

if (isset($_POST['update'])) {
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);	
	
	//another day to checking empty fields
	if (empty($name) || empty($age) || empty($email)) {
		if (empty($name)) {
			echo "<font color='red'>Please fill up the name section.</font><br/>";
		}
		
		if (empty($age)) {
			echo "<font color='red'>Please fill up the age section.</font><br/>";
		}
		
		if (empty($email)) {
			echo "<font color='red'>Please fill up the email section.</font><br/>";
		}
	} else {
		$result = mysqli_query($mysqli, "UPDATE users SET `name` = '$name', `age` = '$age', `email` = '$email' WHERE `id` = $id");
		
		echo "<p><font color='green'>Succesfully updated the database</p>";
		echo "<a href='index.php'>View Result</a>";
	}
}
