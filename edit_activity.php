<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>MSL | Edit Activity</title>
    <meta name="description" content="Edit Activity Data"/>
    <meta name="keywords" content="Edit, Activity, information"/>
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

        $sql = "SELECT * FROM activities WHERE id = ?";
        if ($stmt = mysqli_prepare($conn, $sql)) {
            mysqli_stmt_bind_param($stmt, "i", $id);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);
                $title = $row['title'];
                $description1 = $row['description1'];
                $description2 = $row['description2'];
                $list1 = $row['list1'];
                $list2 = $row['list2'];
                $list3 = $row['list3'];
                $list4 = $row['list4'];
                $list5 = $row['list5'];
                $list6 = $row['list6'];
                $list7 = $row['list7'];
                $list8 = $row['list8'];
                $asidelist1 = $row['asidelist1'];
                $asidelist2 = $row['asidelist2'];
                $asidelist3 = $row['asidelist3'];
                $asidelist4 = $row['asidelist4'];
                $asidelist5 = $row['asidelist5'];
                $asidelist6 = $row['asidelist6'];
                $link1 = $row['link1'];
                $link2 = $row['link2'];
                $link3 = $row['link3'];
                $photo = $row['photo'];
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
        <h2>Edit Activity Record</h2>
        <form method="post" action="update_activity.php" class="edit-form-unique">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
			
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($title); ?>">
			
            <label for="description1">Description:</label>
            <input type="text" id="description1" name="description1" value="<?php echo htmlspecialchars($description1); ?>"><br>
			
            <label for="description2">Description 2:</label>
            <input type="text" id="description2" name="description2" value="<?php echo htmlspecialchars($description2); ?>"><br>
			
            <label for="list1">Point 1:</label>
            <input type="text" id="list1" name="list1" value="<?php echo htmlspecialchars($list1); ?>"><br>
			
            <label for="list2">Point 2:</label>
            <input type="text" id="list2" name="list2" value="<?php echo htmlspecialchars($list2); ?>"><br>
			
            <label for="list3">Point 3:</label>
            <input type="text" id="list3" name="list3" value="<?php echo htmlspecialchars($list3); ?>"><br>
			
            <label for="list4">Point 4:</label>
            <input type="text" id="list4" name="list4" value="<?php echo htmlspecialchars($list4); ?>"><br>
			
            <label for="list5">Point 5:</label>
            <input type="text" id="list5" name="list5" value="<?php echo htmlspecialchars($list5); ?>"><br>
			
            <label for="list6">Point 6:</label>
            <input type="text" id="list6" name="list6" value="<?php echo htmlspecialchars($list6); ?>"><br>
			
            <label for="list7">Point 7:</label>
            <input type="text" id="list7" name="list7" value="<?php echo htmlspecialchars($list7); ?>"><br>
			
            <label for="list8">Point 8:</label>
            <input type="text" id="list8" name="list8" value="<?php echo htmlspecialchars($list8); ?>"><br>
			
            <label for="asidelist1">Aside Point 1:</label>
            <input type="text" id="asidelist1" name="asidelist1" value="<?php echo htmlspecialchars($asidelist1); ?>"><br>
			
            <label for="asidelist2">Aside Point 2:</label>
            <input type="text" id="asidelist2" name="asidelist2" value="<?php echo htmlspecialchars($asidelist2); ?>"><br>
			
            <label for="asidelist3">Aside Point 3:</label>
            <input type="text" id="asidelist3" name="asidelist3" value="<?php echo htmlspecialchars($asidelist3); ?>"><br>
			
            <label for="asidelist4">Aside Point 4:</label>
            <input type="text" id="asidelist4" name="asidelist4" value="<?php echo htmlspecialchars($asidelist4); ?>"><br>
			
            <label for="asidelist5">Aside Point 5:</label>
            <input type="text" id="asidelist5" name="asidelist5" value="<?php echo htmlspecialchars($asidelist5); ?>"><br>
			
            <label for="asidelist6">Aside Point 6:</label>
            <input type="text" id="asidelist6" name="asidelist6" value="<?php echo htmlspecialchars($asidelist6); ?>"><br>
			
            <label for="link1">Link 1:</label>
            <input type="text" id="link1" name="link1" value="<?php echo htmlspecialchars($link1); ?>"><br>
			
            <label for="link2">Link 2:</label>
            <input type="text" id="link2" name="link2" value="<?php echo htmlspecialchars($link2); ?>"><br>
			
            <label for="link3">Link 3:</label>
            <input type="text" id="link3" name="link3" value="<?php echo htmlspecialchars($link3); ?>"><br>
			
            <label for="photo">Photo:</label>
            <input type="text" id="photo" name="photo" value="<?php echo htmlspecialchars($photo); ?>"><br>
			
            <input type="submit" value="Update" class="update-btn">
        </form>
    </div>
    </div>
</body>
</html>
