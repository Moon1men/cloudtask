<?php
	$servername = "cloudtask";
	$username = "root";
	$password = "";
	$db = "cloudtask";

	$conn = new mysqli($servername, $username, $password, $db);

	if ($conn->connect_error) {
  		die("Connection failed: " . $conn->connect_error);
	} 
?>