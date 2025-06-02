<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>MSL | Update Record</title>
    <meta name="description" content="Update Login Data"/>
    <meta name="keywords" content="Update, Login, information"/>
    <link rel="stylesheet" type="text/css" href="styles/Style.css">
    <link rel="stylesheet" type="text/css" href="styles/enhancement.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <?php include ('connection.php'); ?>
    <?php include ('database.php'); ?>
</head>
<body>

    <?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $message = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $servername = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "aria";

        $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "UPDATE login SET Username = ?, Password = ? WHERE id = ?";
        if ($stmt = mysqli_prepare($conn, $sql)) {
            mysqli_stmt_bind_param($stmt, "ssi", $username, $password, $id);

            if (mysqli_stmt_execute($stmt)) {
                $message = "Record updated successfully";
                header("Location: adminview.php");
                exit();
            } else {
                $message = "Error updating record: " . mysqli_error($conn);
            }
            mysqli_stmt_close($stmt);
        } else {
            $message = "Error preparing statement: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    } else {
        $message = "Invalid request.";
    }
    ?>

    <?php if ($message != ''): ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>

    <form name="updateForm" action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php echo $_POST['username']; ?>">
        <label for="password">Password:</label>
        <input type="text" id="password" name="password" value="<?php echo $_POST['password']; ?>">
        <input type="submit" value="Update">
    </form>

    <?php include 'adminfooter.php';?>
</body>
</html>