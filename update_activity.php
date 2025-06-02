<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>MSL | Update Activity</title>
    <meta name="description" content="Update Activity Data"/>
    <meta name="keywords" content="Update, Activity, information"/>
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
        $title = $_POST['title'];
        $description1 = $_POST['description1'];
		$description2 = $_POST['description2'];
        $list1 = $_POST['list1'];
        $list2 = $_POST['list2'];
        $list3 = $_POST['list3'];
        $list4 = $_POST['list4'];
        $list5 = $_POST['list5'];
        $list6 = $_POST['list6'];
        $list7 = $_POST['list7'];
        $list8 = $_POST['list8'];
        $asidelist1 = $_POST['asidelist1'];
        $asidelist2 = $_POST['asidelist2'];
        $asidelist3 = $_POST['asidelist3'];
        $asidelist4 = $_POST['asidelist4'];
        $asidelist5 = $_POST['asidelist5'];
        $asidelist6 = $_POST['asidelist6'];
        $link1 = $_POST['link1'];
        $link2 = $_POST['link2'];
        $link3 = $_POST['link3'];
        $photo = $_POST['photo'];

        $servername = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "aria";

        $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "UPDATE activities SET title = ?, description1 = ?, description2 = ?, list1 = ?, list2 = ?, list3 = ?, list4 = ?, list5 = ?, list6 = ?, list7 = ?, list8 = ?, asidelist1 = ?, asidelist2 = ?, asidelist3 = ?, asidelist4 = ?, asidelist5 = ?, asidelist6 = ?, link1 = ?, link2 = ?, link3 = ?, photo = ? WHERE id = ?";
        if ($stmt = mysqli_prepare($conn, $sql)) {
            mysqli_stmt_bind_param($stmt, "sssssssssssssssssssssi", $title, $description1, $description2, $list1, $list2, $list3, $list4, $list5, $list6, $list7, $list8, $asidelist1, $asidelist2, $asidelist3, $asidelist4, $asidelist5, $asidelist6, $link1, $link2, $link3, $photo, $id);
            if (mysqli_stmt_execute($stmt)) {
                $message = "Record updated successfully";
                header("Location: management.php");
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

</body>
</html>
