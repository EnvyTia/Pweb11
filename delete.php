<?php
require_once("database_connection.php");
//select by id
$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM users WHERE id = $id");

header("Location:index.php");
