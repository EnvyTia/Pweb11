<html>
<head>
	<title>New</title>
</head>

<body>
<?php
require_once("database_connection.php");

if (isset($_POST['submit'])) {
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
		
	//empty field checking
	if (empty($name) || empty($age) || empty($email)) {
		if (empty($name)) {
			echo "<font color='red'>Please input name.</font><br/>";
		}
		
		if (empty($age)) {
			echo "<font color='red'>Please input age.</font><br/>";
		}
		
		if (empty($email)) {
			echo "<font color='red'>Please input email.</font><br/>";
		}
		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		//pass data into database
		$result = mysqli_query($mysqli, "INSERT INTO users (`name`, `age`, `email`) VALUES ('$name', '$age', '$email')");
		
		echo "<p><font color='green'>Data added successfully!</p>";
		echo "<a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
