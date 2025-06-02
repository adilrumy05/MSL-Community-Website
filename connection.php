<?php

	$servername = "localhost";
	$username = "root";
	$password = "";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password);

	// Create database
	$sql = "CREATE DATABASE IF NOT EXISTS aria";

	mysqli_query($conn, $sql);
	mysqli_close($conn);
?>

