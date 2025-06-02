<!DOCTYPE html>
<html lang="en">

<head>
	<title>MSL | Activity Process</title>

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

	<?php

        $title = $description1 = $description2 = $list1 = $list2 = $list3 = $list4 = $list5 = $list6 = $list7 = $list8 = $asidelist1 = $asidelist2 = $asidelist3 = $asidelist4 = $asidelist5 = $asidelist6 = $link1 = $link2 = $link3 = $photo = "";
		
		if (isset($_POST['title'])) { 
		    $title = $_POST['title']; 
		}

		if (isset($_POST['description1'])) { 
		    $description1 = $_POST['description1']; 
		}

		if (isset($_POST['description2'])) { 
		    $description2 = $_POST['description2']; 
		}

		if (isset($_POST['list1'])) { 
		    $list1 = $_POST['list1']; 
		}

		if (isset($_POST['list2'])) { 
		    $list2 = $_POST['list2']; 
		}

		if (isset($_POST['list3'])) { 
		    $list3 = $_POST['list3']; 
		}

		if (isset($_POST['list4'])) { 
		    $list4 = $_POST['list4']; 
		}

		if (isset($_POST['list5'])) { 
		    $list5 = $_POST['list5']; 
		}

		if (isset($_POST['list6'])) { 
		    $list6 = $_POST['list6']; 
		}

		if (isset($_POST['list7'])) { 
		    $list7 = $_POST['list7']; 
		}

		if (isset($_POST['list8'])) { 
		    $list8 = $_POST['list8']; 
		}

		if (isset($_POST['asidelist1'])) { 
		    $asidelist1 = $_POST['asidelist1']; 
		}

		if (isset($_POST['asidelist2'])) { 
		    $asidelist2 = $_POST['asidelist2']; 
		}

		if (isset($_POST['asidelist3'])) { 
		    $asidelist3 = $_POST['asidelist3']; 
		}

		if (isset($_POST['asidelist4'])) { 
		    $asidelist4 = $_POST['asidelist4']; 
		}

		if (isset($_POST['asidelist5'])) { 
		    $asidelist5 = $_POST['asidelist5']; 
		}

		if (isset($_POST['asidelist6'])) { 
		    $asidelist6 = $_POST['asidelist6']; 
		}

		if (isset($_POST['link1'])) { 
		    $link1 = $_POST['link1']; 
		}

		if (isset($_POST['link2'])) { 
		    $link2 = $_POST['link2']; 
		}

		if (isset($_POST['link3'])) { 
		    $link3 = $_POST['link3']; 
		}

		if (isset($_POST['photo'])) { 
		    $photo = $_POST['photo']; 
		}


	?>

	<h2>Additional Activity Confirmation</h2>

	<div class="container">
		<p class="confirm-p">Latest addition to the Activities page:</p>
        <table class="confirm-table">
            <tr>
                <td class="confirm-title">Title:</td>
                <td class="confirm-content"><?php echo $title; ?></td>
            </tr>
            <tr>
                <td class="confirm-title">Description:</td>
                <td class="confirm-content"><?php echo $description1; ?></td>
            </tr>
            <tr>
                <td class="confirm-title">Extra Description:</td>
                <td class="confirm-content"><?php echo $description2; ?></td>
            </tr>
            <tr>
                <td class="confirm-title">Point 1:</td>
                <td class="confirm-content"><?php echo $list1; ?></td>
            </tr>
            <tr>
                <td class="confirm-title">Point 2:</td>
                <td class="confirm-content"><?php echo $list2; ?></td>
            </tr>
            <tr>
                <td class="confirm-title">Point 3:</td>
                <td class="confirm-content"><?php echo $list3; ?></td>
            </tr>
            <tr>
                <td class="confirm-title">Point 4:</td>
                <td class="confirm-content"><?php echo $list4; ?></td>
            </tr>
            <tr>
                <td class="confirm-title">Point 5:</td>
                <td class="confirm-content"><?php echo $list5; ?></td>
            </tr>
            <tr>
                <td class="confirm-title">Extra Point 1:</td>
                <td class="confirm-content"><?php echo $list6; ?></td>
            </tr>
            <tr>
                <td class="confirm-title">Extra Point 2:</td>
                <td class="confirm-content"><?php echo $list7; ?></td>
            </tr>
            <tr>
                <td class="confirm-title">Extra Point 3:</td>
                <td class="confirm-content"><?php echo $list8; ?></td>
            </tr>
			<tr>
                <td class="confirm-title">Event date:</td>
                <td class="confirm-content"><?php echo $asidelist1; ?></td>
            </tr>
			<tr>
                <td class="confirm-title">Activity time:</td>
                <td class="confirm-content"><?php echo $asidelist2; ?></td>
            </tr>
			<tr>
                <td class="confirm-title">Venue:</td>
                <td class="confirm-content"><?php echo $asidelist3; ?></td>
            </tr>
			<tr>
                <td class="confirm-title">Location:</td>
                <td class="confirm-content"><?php echo $asidelist4; ?></td>
            </tr>
			<tr>
                <td class="confirm-title">Email:</td>
                <td class="confirm-content"><?php echo $asidelist5; ?></td>
            </tr>
			<tr>
                <td class="confirm-title">Website:</td>
                <td class="confirm-content"><?php echo $asidelist6; ?></td>
            </tr>
			<tr>
                <td class="confirm-title">Location Link:</td>
                <td class="confirm-content"><?php echo $link1; ?></td>
            </tr>
			<tr>
                <td class="confirm-title">Email Link:</td>
                <td class="confirm-content"><?php echo $link2; ?></td>
            </tr>
			<tr>
                <td class="confirm-title">Website Link:</td>
                <td class="confirm-content"><?php echo $link3; ?></td>
            </tr>
			<tr>
                <td class="confirm-title">Photo:</td>
                <td class="confirm-content"><?php echo $photo; ?></td>
            </tr>
			</table>
		<div class="return-button"> 
			<a href="management.php" class="return-btn" >Return</a>
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
    $link2= $_POST['link2'];
    $link3 = $_POST['link3'];
    $photo = $_POST['photo'];
    

    $sql = "INSERT INTO activities (title, description1, description2, list1, list2, list3, list4, list5, list6, list7, list8, asidelist1, asidelist2, asidelist3, asidelist4, asidelist5, asidelist6, link1, link2, link3, photo) 
    VALUES ('$title', '$description1', '$description2', '$list1', '$list2', '$list3', '$list4', '$list5', '$list6', '$list7', '$list8', '$asidelist1', '$asidelist2', '$asidelist3', '$asidelist4', '$asidelist5', '$asidelist6', '$link1', '$link2', '$link3', '$photo')";

    mysqli_query($conn, $sql);
    mysqli_close($conn);

    ?>
</body>

</html>
