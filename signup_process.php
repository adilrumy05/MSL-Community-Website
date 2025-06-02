<!DOCTYPE html>
<html lang="en">

<head>
	<title>MSL | Signup Process</title>

	<meta charset="utf-8">
    <meta name="Author" content="Andrei Lo">
    <meta name="Description" content="Malaysia Sign Language Homepage">
    <meta name="keywords" content="Confirm, MSL, Sign Language">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="stylesheet" type="text/css" href="styles/enhancement.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
	<?php include ('connection.php'); ?>
</head>

<body>

    <?php include 'navigationbar.php';?>
  
    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "aria";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // Retrieve data from the database
    $sql = "SELECT Username FROM login";
    $result = $conn->query($sql);

    // store usernames from the database in an array
    $usernames = array();

    if ($result && $result->num_rows > 0) {
        // Fetch usernames and store them in the array
        while($row = $result->fetch_assoc()) {
            $usernames[] = $row["Username"];
        }
    }

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the entered username and password from the form
        $enteredUsername = $_POST['signupUsername'];
        $enteredPassword = $_POST['signupPassword'];

        // Check if the entered username already exists in the database
        if (in_array($enteredUsername, $usernames)) {
        echo '
        <div class="container">
            <img src="images/SSD_Sorry.jpg" alt="sorry picture" height="200" id="center-img">
            <p class="confirm-p">Username already exists. Please choose a different username. </p>
            <div class="return-button">
                <a href="index.php" class="return-btn">Return</a>
            </div>
        </div>';
    } else {
            // Username doesn't exist, proceed with signup process
            // Insert the new username and plain text password into the database, not hashed 
            $stmt = $conn->prepare("INSERT INTO login (Username, Password) VALUES (?, ?)");
            if ($stmt === false) {
                die("Prepare failed: " . $conn->error);
            }
            $stmt->bind_param("ss", $enteredUsername, $enteredPassword);

            if ($stmt->execute()) {
                echo '
                <div class="container">
                    <img src="images/SSD_congratulations.png" alt="sorry picture" height="200" id="center-img">
                    <p class="confirm-p">Sign-Up successful.</p>
                    <div class="return-button">
                        <a href="index.php" class="return-btn">Return</a>
                    </div>
                </div>';
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        }
    }

    // Close the connection
    $conn->close();
    ?>


    <?php include 'footer.php';?>

</body>

</html>