<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aria";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

    $sql = "CREATE TABLE IF NOT EXISTS login (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        Username VARCHAR(30) NOT NULL,
        Password VARCHAR(30) NOT NULL
    )";

mysqli_query($conn, $sql);
mysqli_close($conn);
?>











