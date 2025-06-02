<!DOCTYPE html>
<html lang="en">

<head>
	<title>MSL | Volunteer Confirmation</title>

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

		 $firstname = $lastname = $phonenumber = $email = $preferedcommunication = $servicetype = $date = $time = $extradetails = $streetaddress = $city = $state = $postcode = $volunteerType = $Interest = $findus = "";

		if (isset($_POST['fname'])) { 
		    $firstname = $_POST['fname']; 
		}

		if (isset($_POST['lname'])) { 
		    $lastname = $_POST['lname']; 
		}

        if (isset($_POST['email'])) { 
            $email = $_POST['email']; 
        }

		if (isset($_POST['street'])) { 
		    $streetaddress = $_POST['street']; 
		}

		if (isset($_POST['city'])) { 
		    $city = $_POST['city']; 
		}

		if (isset($_POST['state'])) { 
		    $state = $_POST['state']; 
		}

		if (isset($_POST['postcode'])) { 
		    $postcode = $_POST['postcode']; 
		}

        if (isset($_POST['phoneno'])) { 
            $phonenumber = $_POST['phoneno']; 
        }

        if (isset($_POST['volunteerType'])) { 
            $volunteerType = $_POST['volunteerType']; 
        }

        if (isset($_POST['date'])) { 
            $date = $_POST['date']; 
        }

		if (isset($_POST['time'])) { 
		    $time = $_POST['time']; 
		}

		if (isset($_POST['Interest'])) { 
		    $Interest = $_POST['Interest']; 
		}

        if (isset($_POST['findus'])) { 
            $findus = $_POST['findus']; 
        }

	?>

	<h2>Volunteer Confirmation</h2>

	<div class="container">
	<p class="confirm-p">We received your Volunteer Confirmation:</p>
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
				<td class="confirm-title">Street Address:</td>
				<td class="confirm-content"><?php echo $streetaddress; ?></td>
			</tr>
			<tr>
				<td class="confirm-title">City:</td>
				<td class="confirm-content"><?php echo $city; ?></td>
			</tr>
			<tr>
				<td class="confirm-title">State:</td>
				<td class="confirm-content"><?php echo $state; ?></td>
			</tr>
			<tr>
				<td class="confirm-title">Postcode:</td>
				<td class="confirm-content"><?php echo $postcode; ?></td>
			</tr>
			<tr>
				<td class="confirm-title">Volunteer Type:</td>
				<td class="confirm-content"><?php echo $volunteerType; ?></td>
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
				<td class="confirm-title">Areas of Interest:</td>
				<td class="confirm-content"><?php echo $Interest; ?></td>
			</tr>
			<tr>
				<td class="confirm-title">How did you find us?:</td>
				<td class="confirm-content"><?php echo $findus; ?></td>
			</tr>
		</table>

    <div class="return-button"> 
        <a href="JoinVolunteer.php" class="return-btn" >Return</a>
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
    $email = $_POST['email'];
    $streetaddress = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $postcode = $_POST['postcode'];
    $phoneno = $_POST['phoneno'];
    $volunteerType = $_POST['volunteerType'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $Interest = $_POST['Interest'];
    $findus = $_POST['findus'];
    

    $sql = "INSERT INTO joinvolunteer (fname, lname, email, streetaddress, city, state, postcode, phonenumber, volunteerType, date, time, Interest, findus)
    VALUES ('$fname', '$lname', '$email', '$streetaddress', '$city', '$state', '$postcode', '$phoneno', '$volunteerType', '$date', '$time', '$Interest', '$findus')";


    mysqli_query($conn, $sql);
    mysqli_close($conn);

    ?>



    <?php include 'footer.php';?>
    

</body>

</html>
