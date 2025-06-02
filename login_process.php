<!DOCTYPE html>
<html lang="en">

<head>
    <title>MSL | Login Process</title>

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

    // Retrieve data from the login table
    $sql = "SELECT Username FROM login";
    $result = $conn->query($sql);

    // Array to store usernames from the database
    $usernames = array();

    if ($result && $result->num_rows > 0) {
        // Fetch usernames and store them in the array
        while ($row = $result->fetch_assoc()) {
            $usernames[] = $row["Username"];
        }
    }
    
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if a user is already logged in
        if (isset($_SESSION['username'])) {
            // User is already logged in then it display already loggged in
            echo '<div class="container">
                    <img src="images/SSD_Sorry.jpg" alt="sorry picture" id="center-img">
                    <p class="confirm-p">You are already logged in.</p>
                    <div class="return-button">
                        <a href="index.php" class="return-btn">Return</a>
                    </div>
                  </div>';
        } else {
            
            //if it is the login form then it will asssign the variable for processing
            if (isset($_POST['loginUsername']) && isset($_POST['loginPassword'])) {
                $loginUsername = $_POST['loginUsername'];
                $loginPassword = $_POST['loginPassword'];

                // Check if the login credentials are admin/admin then redirect to admin view
                if ($loginUsername === 'admin' && $loginPassword === 'admin') {
                    $_SESSION['username'] = $loginUsername;
                    header("Location: adminview.php");
                    exit();
                } else {
                    // Handle normal user login
                    $stmt = $conn->prepare("SELECT * FROM login WHERE Username = ? AND Password = ?");
                    if ($stmt === false) {
                        die("Prepare failed: " . $conn->error);
                    }
                    $stmt->bind_param("ss", $loginUsername, $loginPassword);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows > 0) {
                        // Successful login
                        $_SESSION['username'] = $loginUsername; // Set session variable
                        echo '<div class="container">
                                <img src="images/SSD_congratulations.png" alt="congratulations picture" height="200" id="center-img">
                                <p class="confirm-p">Successfully Logged In!</p>
                                <div class="return-button">
                                    <a href="index.php" class="return-btn">Return</a>
                                </div>
                              </div>';
                    
                        
                        exit();
                    } else {
                        // Failed login
                        echo '<div class="container">
                                <img src="images/SSD_Sorry.jpg" alt="sorry picture" height="200" id="center-img">
                                <p class="confirm-p">Invalid username or password.</p>
                                <div class="return-button">
                                    <a href="index.php" class="return-btn">Return</a>
                                </div>
                              </div>';
                    }

                    $stmt->close();
                }
            }
        }
    }

    // Close the connection
    $conn->close();
    ?>

    <?php include 'footer.php';?>

</body>

</html>