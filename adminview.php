<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MSL | Admin View</title>
    <meta name="description" content="Admin View"/>
    <meta name="keywords" content="admin, view"/>
    <meta name="author" content="Clement"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" type="text/css" href="styles/Style.css">
    <link rel="stylesheet" type="text/css" href="styles/enhancement.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body>

<div class="main-container-unique">
    
    <?php include 'adminNav.php';?>

    <div class="view-container-unique">
        <table class="view-table-unique">
            <caption>Accounts Data</caption>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Passwords</th>
                <th>Delete Account</th>
                <th>Edit Account</th>
            </tr>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "aria";
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            $sql = "SELECT * FROM login";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {

            while($row = mysqli_fetch_assoc($result)) {

            ?>
            <tr>
                <td> <?php echo $row["id"]; ?></td>
                <td> <?php echo $row["Username"]; ?></td>
                <td> <?php echo $row["Password"]; ?></td>
                <td>
                    <form method="post" action="delete_record.php" onsubmit="return confirm('Are you sure you want to delete this record?');" class="delete-record-unique">
                        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                        <input type="submit" value="Delete" class="delete-btn-unique">
                    </form>
                </td>
                <td>
                    <form method="get" action="edit_record.php" class="edit-record-unique">
                        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                        <input type="submit" value="Edit" class="edit-btn-unique">
                    </form>
                </td>
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
