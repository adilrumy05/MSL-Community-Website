<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Activities Page HD">
    <meta name="keywords" content="HTML, CSS, Tags, Activities, SSD"/>
    <meta name="author" content="Adil"/>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <title>MSL | Activities</title>
    <link rel="stylesheet" href="styles/Style.css">
    <link rel="stylesheet" href="styles/enhancement.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface%7CPoppins">
</head>
<body class="JBody">
	
	<?php include 'database.php';?>
	<?php include 'connection.php';?>
	<?php include 'insert_activities.php';?>

    <?php include 'navigationbar.php';?>
	
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "aria";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);

		// Check connection
		if (!$conn) {
			die('Connection failed: ' . mysqli_connect_error());
		}

		$activity_id = $_POST['activity_id'];
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$feedback = mysqli_real_escape_string($conn, $_POST['feedback_' . $activity_id]);

		$sql = "INSERT INTO feedback (activity_id, name, feedback) VALUES ('$activity_id', '$name', '$feedback')";

		if (!mysqli_query($conn, $sql)) {
			die('Error: ' . $sql . '<br>' . mysqli_error($conn));
		}

		mysqli_close($conn);

		// Redirect to the same page to prevent form resubmission
		header('Location: ' . $_SERVER['PHP_SELF']);
		exit;
	}
	
	function feedback($conn, $activity_id) {
        echo '<div class="feedback">';
        echo '<h3 class="JayH3">Leave a feedback:</h3>';
        echo '<div class="feedback-form">';
        echo '<form action="Activities.php" method="post">';
        echo '<input type="text" name="name" placeholder="Your Name" required class="feedback-name"><br>';
        echo '<textarea name="feedback_' . $activity_id . '" placeholder="Your Feedback" required class="feedback-textbox"></textarea><br>';
        echo '<input type="hidden" name="activity_id" value="' . $activity_id . '">';
        echo '<button type="submit" class="feedback-btn">Feedback</button>';
        echo '</form>';
        echo '</div>';
        echo '<div class="comments">';
        echo '<h3 class="JayH3">Users feedbacks</h3>';
        $feedback_result = mysqli_query($conn, "SELECT name, feedback, date FROM feedback WHERE activity_id = " . intval($activity_id) . " ORDER BY date DESC");
        while ($feedback_row = mysqli_fetch_assoc($feedback_result)) {
            echo '<div class="comment-name">' . htmlspecialchars($feedback_row['name']) . '</div>';
            echo '<span class="comment-text">' . htmlspecialchars($feedback_row['feedback']) . '</span>';
            echo '<small class="comment-date">Submitted on: ' . $feedback_row['date'] . '</small>';
        }
        echo '</div>';
        echo '</div>';
    }
	?>

    <header class="JayHeader">
        <h2>Activities</h2>
    </header>
    
    <main class="JayMain">
        <h2 class="h2B">Upcoming Events</h2>
        <section class="JaySection">
            <?php
            $conn = mysqli_connect("localhost", "root", "", "aria");
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $result1 = mysqli_query($conn, "SELECT id, title, description1, description2, list1, list2, list3, list4, list5, list6, 
			list7, list8, asidelist1, asidelist2, asidelist3, asidelist4, asidelist5, asidelist6, link1, link2, link3, photo FROM 
			activities WHERE id = 1");
			
            if (mysqli_num_rows($result1) > 0) {
				while($row = mysqli_fetch_assoc($result1)) {
					echo '<h3 class="JayH3">' . $row["title"] . '</h3>';
					echo '<figure class="JayFigure">';
					echo '<img class="JImg" src="Images/' . $row["photo"] . '" alt="' . $row["title"] . '" title="' . $row["title"] . '">';
					echo '<figcaption class="JayFigcaption">' . $row["description1"] . '<br>';
					echo '<ul class="list1">';
					echo '<li>' . $row["list1"] . '</li>';
					echo '<li>' . $row["list2"] . '</li>';
					echo '<li>' . $row["list3"] . '</li>';
					echo '<li>' . $row["list4"] . '</li>';
					echo '<li>' . $row["list5"] . '</li>';
					echo '</ul>';

					echo $row["description2"];
					echo '<ol class="JOl">';
					echo '<li>' . $row["list6"] . '</li>';
					echo '<li>' . $row["list7"] . '</li>';
					echo '<li>' . $row["list8"] . '</li>';
					echo '</ol>';

					echo '<aside class="JAside">';
					echo '<dl>';
					echo '<dt><b>【' . $row["title"] . '】</b></dt>';
					echo '<dd>📅 Event date: ' . $row["asidelist1"] . '</dd>';
					echo '<dd>🕛 Activity time: ' . $row["asidelist2"] . '</dd>';
					echo '<dd>📍 Venue: ' . $row["asidelist3"] . '</dd>';
					echo '<dd>🚗 Location: <a href="' . $row["link1"] . '">' . $row["asidelist4"] . '</a></dd>';
					echo '<dd>📧 Email: <a href="' . $row["link2"] . '">' . $row["asidelist5"] . '</a></dd>';
					echo '<dd>🌐 Website: <a href="' . $row["link3"] . '">' . $row["asidelist6"] . '</a></dd>';
					echo '</dl>';
					echo '</aside>';
					echo '</figcaption>';
					echo '</figure>';
					
			?>
					<table class="ECalendar">
						<caption class="event-calendar"><b>EVENT CALENDAR</b></caption>
						<tr>
							<th class="Jayth">Event Name</th>
							<th class="Jayth">Date</th>
							<th class="Jayth">Time</th>
							<th class="Jayth">Location</th>
						</tr>
						<tr>
							<td class="Jaytd"><?php echo $row["title"]; ?></td>
							<td class="Jaytd"><?php echo $row["asidelist1"]; ?></td>
							<td class="Jaytd"><?php echo $row["asidelist2"]; ?></td>
							<td class="Jaytd"><?php echo $row["asidelist3"]; ?></td>
						</tr>
					</table>
			<?php
					feedback($conn, $row["id"]);
				}
            } 

            mysqli_close($conn);
            ?>
			
			</section>
			<?php
				$conn = mysqli_connect("localhost", "root", "", "aria");
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}

				$result1 = mysqli_query($conn, "SELECT id, title, description1, description2, list1, list2, list3, list4, list5, list6, list7, list8,
				asidelist1, asidelist2, asidelist3, asidelist4, asidelist5, asidelist6, link1, link2, link3, photo FROM activities WHERE id >= 8 ");

				if ($result1 && mysqli_num_rows($result1) > 0)  {
					while($row = mysqli_fetch_assoc($result1)) {
						if (!empty($row['description1'])){
							echo '<section class="JaySection">';
							echo '<h3 class="JayH3">' . $row["title"] . '</h3>';
							echo '<figure class="JayFigure">';
							echo '<img class="JImg" src="Images/' . $row["photo"] . '" alt="' . $row["title"] . '" title="' . $row["title"] . '">';
							echo '<figcaption class="JayFigcaption">' . $row["description1"] . '<br>';

							echo '<ul class="list1">';
							if (!empty($row['list1'])) {
								echo '<li>' . $row["list1"] . '</li>';
							}
							if (!empty($row['list2'])) {
								echo '<li>' . $row["list2"] . '</li>';
							}
							if (!empty($row['list3'])) {
								echo '<li>' . $row["list3"] . '</li>';
							}
							if (!empty($row['list4'])) {
								echo '<li>' . $row["list4"] . '</li>';
							}
							if (!empty($row['list5'])) {
								echo '<li>' . $row["list5"] . '</li>';
							}
							echo '</ul>';

							echo $row["description2"];
							echo '<ol class="JOl">';
							if (!empty($row['list6'])) {
								echo '<li>' . $row["list6"] . '</li>';
							}
							if (!empty($row['list7'])) {
								echo '<li>' . $row["list7"] . '</li>';
							}
							if (!empty($row['list8'])) {
								echo '<li>' . $row["list8"] . '</li>';
							}
							echo '</ol>';

							if (!empty($row['asidelist1']) && !empty($row['asidelist2']) && !empty($row['asidelist3']) && !empty($row['asidelist4']) && !empty($row['asidelist5']) && 
							!empty($row['asidelist6']) && !empty($row['link1']) && !empty($row['link2']) && !empty($row['link3'])){
								echo '<aside class="JAside">';
								echo '<dl>';
								echo '<dt><b>【' . $row["title"] . '】</b></dt>';
								echo '<dd>📅 Event date: ' . $row["asidelist1"] . '</dd>';
								echo '<dd>🕛 Activity time: ' . $row["asidelist2"] . '</dd>';
								echo '<dd>📍 Venue: ' . $row["asidelist3"] . '</dd>';
								echo '<dd>🚗 Location: <a href="' . $row["link1"] . '">' . $row["asidelist4"] . '</a></dd>';
								echo '<dd>📧 Email: <a href="' . $row["link2"] . '">' . $row["asidelist5"] . '</a></dd>';
								echo '<dd>🌐 Website: <a href="' . $row["link3"] . '">' . $row["asidelist6"] . '</a></dd>';
								echo '</dl>';
								echo '</aside>';
								echo '</figcaption>';
								echo '</figure>';

								echo '<table class="ECalendar">';
								echo '<caption class="event-calendar"><b>EVENT CALENDAR</b></caption>';
								echo '<tr>';
								echo '<th class="Jayth">Event Name</th>';
								echo '<th class="Jayth">Date</th>';
								echo '<th class="Jayth">Time</th>';
								echo '<th class="Jayth">Location</th>';
								echo '</tr>';
								echo '<tr>';
								echo '<td class="Jaytd">' . $row["title"] . '</td>';
								echo '<td class="Jaytd">' . $row["asidelist1"] . '</td>';
								echo '<td class="Jaytd">' . $row["asidelist2"] . '</td>';
								echo '<td class="Jaytd">' . $row["asidelist3"] . '</td>';
								echo '</tr>';
								echo '</table>';
								feedback($conn, $row["id"]);
								echo '</section>';
								
							} else {
								echo '</figcaption>';
								echo '</figure>';
								feedback($conn, $row["id"]);
								echo '</section>';
							}
						} else {
							echo '<p>description1 is empty for title ' . $row["title"] . '.</p>';
						}
					}
				} 

				mysqli_close($conn);
			?>


        
        <h2 class="h2A">Past Events</h2>
        <section class="JaySection">
            <?php
            $conn = mysqli_connect("localhost", "root", "", "aria");
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $result1 = mysqli_query($conn, "SELECT id, title, photo, description1 FROM activities WHERE id = 2");
			$result2 = mysqli_query($conn, "SELECT id, title, photo, description1 FROM activities WHERE id = 3");

            if (mysqli_num_rows($result1) > 0) {
				if (mysqli_num_rows($result2) > 0) {
					while($row = mysqli_fetch_assoc($result1)) {
						echo '<h3 class="JayH3">' . $row["title"] . '</h3>';
						echo '<figure class="JayFigure">';
						echo '<img class="JImg" src="Images/' . $row["photo"] . '" alt="' . $row["title"] . '" title="' . $row["title"] . '">';
						echo '<figcaption class="JayFigcaption">' . $row["description1"] . '</figcaption>';
						echo '</figure>';
					}
					
					while($row = mysqli_fetch_assoc($result2)) {
						echo '<figure class="JayFigure">';
						echo '<img class="JImg" src="Images/' . $row["photo"] . '" alt="' . $row["title"] . '" title="' . $row["title"] . '">';
						echo '<figcaption class="JayFigcaption">' . $row["description1"] . '</figcaption>';
						echo '</figure>';
						feedback($conn, $row["id"]);
					}

				}
            } 

            mysqli_close($conn);
            ?>
		</section>
		
		<section class="JaySection">
			<?php
            $conn = mysqli_connect("localhost", "root", "", "aria");
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
			
            $result1 = mysqli_query($conn, "SELECT id, title, photo, description1 FROM activities WHERE id = 4");
			$result2 = mysqli_query($conn, "SELECT id, title, photo, description1 FROM activities WHERE id = 5");
			
            if (mysqli_num_rows($result1) > 0) {
				if (mysqli_num_rows($result2) > 0) {
					while($row = mysqli_fetch_assoc($result1)) {
						echo '<h3 class="JayH3">' . $row["title"] . '</h3>';
						echo '<figure class="JayFigure">';
						echo '<img class="JImg" src="Images/' . $row["photo"] . '" alt="' . $row["title"] . '" title="' . $row["title"] . '">';
						echo '<figcaption class="JayFigcaption">' . $row["description1"] . '</figcaption>';
						echo '</figure>';
					}
					
					while($row = mysqli_fetch_assoc($result2)) {
						echo '<figure class="JayFigure">';
						echo '<img class="JImg" src="Images/' . $row["photo"] . '" alt="' . $row["title"] . '" title="' . $row["title"] . '">';
						echo '<figcaption class="JayFigcaption">' . $row["description1"] . '</figcaption>';
						echo '</figure>';
						feedback($conn, $row["id"]);
					}
					
				}
            } 

            mysqli_close($conn);
            ?>
		</section>
		
		<section class="JaySection">
			<?php
            $conn = mysqli_connect("localhost", "root", "", "aria");
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $result1 = mysqli_query($conn, "SELECT id, title, photo, description1 FROM activities WHERE id = 6");
			$result2 = mysqli_query($conn, "SELECT id, title, photo, description1 FROM activities WHERE id = 7");
			
            if (mysqli_num_rows($result1) > 0) {
				if (mysqli_num_rows($result2) > 0) {
					while($row = mysqli_fetch_assoc($result1)) {
						echo '<h3 class="JayH3">' . $row["title"] . '</h3>';
						echo '<figure class="JayFigure">';
						echo '<img class="JImg" src="Images/' . $row["photo"] . '" alt="' . $row["title"] . '" title="' . $row["title"] . '">';
						echo '<figcaption class="JayFigcaption">' . $row["description1"] . '</figcaption>';
						echo '</figure>';
					}
					
					while($row = mysqli_fetch_assoc($result2)) {
						echo '<figure class="JayFigure">';
						echo '<img class="JImg" src="Images/' . $row["photo"] . '" alt="' . $row["title"] . '" title="' . $row["title"] . '">';
						echo '<figcaption class="JayFigcaption">' . $row["description1"] . '</figcaption>';
						echo '</figure>';
						feedback($conn, $row["id"]);
					}
					

				}
            } 

            mysqli_close($conn);
            ?>
		</section>
		
        <h3 class="JayH3">If You Are Interested In Supporting, Please Contact The Person In Charge:</h3>
         
        <a class="register" href="https://www.wasap.my/60168716216"> 
            <section class="JaySection Whatsapp">
                <p class="underline2"><b>CLICK HERE TO CONTACT THROUGH WHATSAPP</b></p>
            </section>
        </a>
        
    </main>

    <?php include 'footer.php';?>
    
</body>
</html>