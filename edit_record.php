<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>MSL | Edit Record</title>
    <meta name="description" content="Edit Login Data"/>
    <meta name="keywords" content="Edit, Login, information"/>
    <link rel="stylesheet" type="text/css" href="styles/Style.css">
    <link rel="stylesheet" type="text/css" href="styles/enhancement.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">

	<link rel="icon" type="image/x-icon" href="images/favicon.ico">

</head>
<body>
    <div class="main-container-unique">
    <?php include 'adminNav.php';?>

    <?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $id = $username = $password = "";

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
        $id = $_GET['id'];

        $servername = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "aria";

        $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM login WHERE id = ?";
        if ($stmt = mysqli_prepare($conn, $sql)) {
            mysqli_stmt_bind_param($stmt, "i", $id);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);
                $username = $row['Username'];
                $password = $row['Password'];
            } else {
                echo "No record found.";
                exit();
            }
            mysqli_stmt_close($stmt);
        }
        mysqli_close($conn);
    } else {
        echo "Invalid request.";
        exit();
    }
    ?>
    
    <div class="view-container-unique">
        <h2>Edit Record</h2>
        <form method="post" action="update_record.php" class="edit-form-unique">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>" required>
            <label for="password">Password:</label>
            <input type="text" id="password" name="password" value="<?php echo htmlspecialchars($password); ?>" required><br>
            <input type="submit" value="Update" class="update-btn">
        </form>
    </div>
    </div>
</body>
</html>