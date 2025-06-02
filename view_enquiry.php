<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>MSL | Enquiry Information</title>
    <meta name="description" content="View Enquiry Data"/>
    <meta name="keywords" content="enquiries, information"/>
    <meta name="author" content="Clement"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" type="text/css" href="styles/Style.css">
    <link rel="stylesheet" type="text/css" href="styles/enhancement.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <?php include ('database.php'); ?>
</head>
<body>

<div class="main-container-unique">
    <?php include 'adminNav.php';?>

    <div class="view-container-unique">
        <table class="view-table-unique">
            <caption>Enquiry Data</caption>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Communication Preference</th>
                <th>Service</th>
                <th>Date</th>
                <th>Time</th>
                <th>Details</th>
            </tr>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "aria";
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT * FROM enquiry";
            $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td> <?php echo $row["id"]; ?></td>
                    <td> <?php echo $row["fname"]. " " . $row["lname"]; ?></td>
                    <td> <?php echo $row["phoneno"]; ?></td>
                    <td> <?php echo $row["email"]; ?></td>
                    <td> <?php echo $row["communication"]; ?></td>
                    <td> <?php echo $row["service"]; ?></td>
                    <td> <?php echo $row["date"]; ?></td>
                    <td> <?php echo $row["time"]; ?></td>
                    <td> <?php echo $row["details"]; ?></td>
                </tr>
                <?php
                    }
                } else {
                    echo "0 results";
                }

            mysqli_close($conn);
            ?>
        </table>
    </div>
</div>
</body>
</html>
