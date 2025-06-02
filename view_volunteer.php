<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>MSL | Volunteer Information</title>
    <meta name="description" content="View Volunteer Data"/>
    <meta name="keywords" content="volunteers, information"/>
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
            <caption>Volunteer Data</caption>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Volunteer Type</th>
                <th>Availability</th>
                <th>Interests</th>
                <th>Found Us Through</th>
            </tr>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "aria";
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            $sql = "SELECT * FROM joinvolunteer";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {

            while($row = mysqli_fetch_assoc($result)) {

            ?>
            <tr>
                <td> <?php echo $row["id"]; ?></td>
                <td> <?php echo $row["fname"]. " " . $row["lname"]; ?></td>
                <td> <?php echo $row["email"]; ?></td>
                <td> <?php echo $row["streetaddress"] . ", " . $row["city"] . ", " . $row["state"] . " " . $row["postcode"]; ?></td>
                <td> <?php echo $row["phonenumber"]; ?></td>
                <td> <?php echo $row["volunteerType"]; ?></td>
                <td> <?php echo $row["date"] . " " . $row["time"]; ?></td>
                <td> <?php echo $row["Interest"]; ?></td>
                <td> <?php echo $row["findus"]; ?></td>
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
