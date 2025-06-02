<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aria";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create joinvolunteer table
$sql = "CREATE TABLE IF NOT EXISTS joinvolunteer (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    fname VARCHAR(30) NOT NULL,
    lname VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    streetaddress VARCHAR(40) NOT NULL,
    city VARCHAR(20) NOT NULL,
    state VARCHAR(20) NOT NULL,
    postcode VARCHAR(5) NOT NULL,
    phonenumber VARCHAR(15) NOT NULL,
    volunteerType VARCHAR(50) NOT NULL,
    date DATE NOT NULL,
    time TIME NOT NULL,
    Interest TEXT NOT NULL,
    findus TEXT NOT NULL
)";
if (!mysqli_query($conn, $sql)) {
    die("Error creating table: " . mysqli_error($conn));
}

// Create enquiry table
$sql = "CREATE TABLE IF NOT EXISTS enquiry (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(30) NOT NULL,
    lname VARCHAR(30) NOT NULL,
    phoneno VARCHAR(15) NOT NULL,
    email VARCHAR(50) NOT NULL,
    communication VARCHAR(30) NOT NULL,
    service VARCHAR(30) NOT NULL,
    date DATE NOT NULL,
    time TIME NOT NULL,
    details MEDIUMTEXT
)";
if (!mysqli_query($conn, $sql)) {
    die("Error creating table: " . mysqli_error($conn));
}

// Create feedback table
$sql = 'CREATE TABLE IF NOT EXISTS feedback (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    activity_id INT(6) NOT NULL,
    name VARCHAR(50) NOT NULL,
    feedback TEXT NOT NULL,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)';
if (!mysqli_query($conn, $sql)) {
    die("Error creating table: " . mysqli_error($conn));
}

// Create activities table
$sql = "CREATE TABLE IF NOT EXISTS activities (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NULL,
    description1 TEXT NOT NULL,
	description2 TEXT NULL,
    list1 TEXT NULL,
    list2 TEXT NULL,
    list3 TEXT NULL,
    list4 TEXT NULL,
    list5 TEXT NULL,
    list6 TEXT NULL,
	list7 TEXT NULL,
	list8 TEXT NULL,
	asidelist1 TEXT NULL,
    asidelist2 TEXT NULL,
    asidelist3 TEXT NULL,
    asidelist4 TEXT NULL,
    asidelist5 TEXT NULL,
    asidelist6 TEXT NULL,
    link1 TEXT NULL,
    link2 TEXT NULL,
    link3 TEXT NULL,
    photo VARCHAR(255) NOT NULL
)";
if (!mysqli_query($conn, $sql)) {
    die("Error creating table: " . mysqli_error($conn));
}

mysqli_close($conn);
?>
