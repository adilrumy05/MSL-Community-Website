<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>MSL | Delete Activity</title>
    <meta name="description" content="Delete Login Data"/>
    <meta name="keywords" content="Delete, Login, information"/>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="stylesheet" type="text/css" href="styles/enhancement.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <?php include ('connection.php'); ?>
    <?php include ('database.php'); ?>
</head>
<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];

        $servername = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "aria";

        $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "DELETE FROM activities WHERE id = ?";
        if ($stmt = mysqli_prepare($conn, $sql)) {
            mysqli_stmt_bind_param($stmt, "i", $id);

            if (mysqli_stmt_execute($stmt)) {
               $message = "Record delete successfully";
                header("Location: management.php");
                exit();
            } else {
                echo "Error deleting record: " . mysqli_error($conn);
            }
            mysqli_stmt_close($stmt);
        } else {
            echo "Error preparing statement: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    } else {
        echo "Invalid request method.";
    }
    ?>


</body>
</html>