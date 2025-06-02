<!DOCTYPE html>
<html lang="en">

<head>
	<title>MSL | Enquiry Process</title>

	<meta charset="utf-8">
    <meta name="Author" content="Andrei Lo and Adil">
    <meta name="Description" content="Malaysia Sign Language Homepage">
    <meta name="keywords" content="Confirm, MSL, Sign Language">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="stylesheet" type="text/css" href="styles/enhancement.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
	<?php include ('connection.php'); ?>
	<?php include ('database.php'); ?>
</head>

<body>

	<?php include 'navigationbar.php';?>

	<?php

		$firstname = $lastname = $phonenumber = $email = $preferedcommunication = $servicetype = $date = $time = $extradetails = "";

		if (isset($_POST['fname'])) { 
		    $firstname = $_POST['fname']; 
		}

		if (isset($_POST['lname'])) { 
		    $lastname = $_POST['lname']; 
		}

		if (isset($_POST['phoneno'])) { 
		    $phonenumber = $_POST['phoneno']; 
		}

		if (isset($_POST['email'])) { 
		    $email = $_POST['email']; 
		}

		if (isset($_POST['communication'])) { 
		    $preferedcommunication = $_POST['communication']; 
		}

		if (isset($_POST['service'])) { 
		    $servicetype = $_POST['service']; 
		}

		if (isset($_POST['date'])) { 
		    $date = $_POST['date']; 
		}

		if (isset($_POST['time'])) { 
		    $time = $_POST['time']; 
		}

		if (isset($_POST['details'])) { 
		    $extradetails = $_POST['details']; 
		}

	?>

	<h2>Enquiry Confirmation</h2>

	<div class="container">
		<p class="confirm-p">We received your Enquiry Confirmation:</p>
        <table class="confirm-table">
            <tr>
                <td class="confirm-title">First Name:</td>
                <td class="confirm-content"><?php echo $firstname; ?></td>
            </tr>
            <tr>
                <td class="confirm-title">Last Name:</td>
                <td class="confirm-content"><?php echo $lastname; ?></td>
            </tr>
            <tr>
                <td class="confirm-title">Phone Number:</td>
                <td class="confirm-content"><?php echo $phonenumber; ?></td>
            </tr>
            <tr>
                <td class="confirm-title">Email:</td>
                <td class="confirm-content"><?php echo $email; ?></td>
            </tr>
            <tr>
                <td class="confirm-title">Preferred Communication:</td>
                <td class="confirm-content"><?php echo $preferedcommunication; ?></td>
            </tr>
            <tr>
                <td class="confirm-title">Service Type:</td>
                <td class="confirm-content"><?php echo $servicetype; ?></td>
            </tr>
            <tr>
                <td class="confirm-title">Date:</td>
                <td class="confirm-content"><?php echo $date; ?></td>
            </tr>
            <tr>
                <td class="confirm-title">Time:</td>
                <td class="confirm-content"><?php echo $time; ?></td>
            </tr>
            <tr>
                <td class="confirm-title">Extra Details:</td>
                <td class="confirm-content"><?php echo $extradetails; ?></td>
            </tr>
        </table>
		<div class="return-button"> 
			<a href="EnquiryService.php" class="return-btn" >Return</a>
		</div>	
    </div>

	<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "aria";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
   
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
	$phoneno = $_POST['phoneno'];
    $email = $_POST['email'];
    $communication = $_POST['communication'];
    $service = $_POST['service'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $details = $_POST['details'];
    

    $sql = "INSERT INTO enquiry (fname, lname, phoneno, email, communication, service, date, time, details)
    VALUES ('$fname', '$lname', '$phoneno', '$email', '$communication', '$service', '$date', '$time', '$details')";

    mysqli_query($conn, $sql);
    mysqli_close($conn);

    ?>


    <?php include 'footer.php';?>

</body>

</html>
