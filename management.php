<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>MSL | Activities Information</title>
    <meta name="description" content="View Activities Data"/>
    <meta name="keywords" content="Activities, information"/>
    <meta name="author" content="Adil"/>
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
		
            <h2>Activities Data</h2><br>
			
			<form method="get" action="add_activity.php" class="add-form">
				<label for="Add" class="add-label">Add a new record</label> 
					<div class="add-col2">
						<input type="submit" value="Add" class="add-btn">
					</div>
			</form>
				
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "aria";
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            $sql = "SELECT * FROM activities";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
				echo '<table class="view-table-unique">';
				echo '<tr>';
					echo '<td class="activity-table-title">ID</td>';
					echo '<td class="activity-table-content">' . $row["id"] . '</td>';
				echo '</tr>';
				
				if ($row["title"] != NULL){
					echo '<tr>';
						echo '<td class="activity-table-title">Title</td>';
						echo '<td>' . $row["title"] . '</td>';
					echo '</tr>';
				}
				if ($row["description1"] != NULL){
					echo '<tr>';
						echo '<td class="activity-table-title">Description</td>';
						echo '<td>' . $row["description1"] . '</td>';
					echo '</tr>';
				}
				if ($row["description2"] != NULL){
					echo '<tr>';
						echo '<td class="activity-table-title">Extra Description</td>';
						echo '<td>' . $row["description2"] . '</td>';
					echo '</tr>';
				}
				if ($row["list1"] != NULL){
					echo '<tr>';
						echo '<td class="activity-table-title">Point 1</td>';
						echo '<td>' . $row["list1"] . '</td>';
					echo '</tr>';
				}
				if ($row["list2"] != NULL){
					echo '<tr>';
						echo '<td class="activity-table-title">Point 2</td>';
						echo '<td>' . $row["list2"] . '</td>';
					echo '</tr>';
				}
				if ($row["list3"] != NULL){
					echo '<tr>';
						echo '<td class="activity-table-title">Point 3</td>';
						echo '<td>' . $row["list3"] . '</td>';
					echo '</tr>';
				}
				if ($row["list4"] != NULL){
					echo '<tr>';
						echo '<td class="activity-table-title">Point 4</td>';
						echo '<td>' . $row["list4"] . '</td>';
					echo '</tr>';
				}
				if ($row["list5"] != NULL){
					echo '<tr>';
						echo '<td class="activity-table-title">Point 5</td>';
						echo '<td>' . $row["list5"] . '</td>';
					echo '</tr>';
				}
				if ($row["list6"] != NULL){
					echo '<tr>';
						echo '<td class="activity-table-title">Extra Point 1</td>';
						echo '<td>' . $row["list6"] . '</td>';
					echo '</tr>';
				}
				if ($row["list7"] != NULL){
					echo '<tr>';
						echo '<td class="activity-table-title">Extra Point 2</td>';
						echo '<td>' . $row["list7"] . '</td>';
					echo '</tr>';
				}
				if ($row["list8"] != NULL){
					echo '<tr>';
						echo '<td class="activity-table-title">Extra Point 3</td>';
						echo '<td>' . $row["list8"] . '</td>';
					echo '</tr>';
				}
				if ($row["asidelist1"] != NULL){
					echo '<tr>';
						echo '<td class="activity-table-title">Event date</td>';
						echo '<td>' . $row["asidelist1"] . '</td>';
					echo '</tr>';
				}
				if ($row["asidelist2"] != NULL){
					echo '<tr>';
						echo '<td class="activity-table-title">Activity time</td>';
						echo '<td>' . $row["asidelist2"] . '</td>';
					echo '</tr>';
				}
				if ($row["asidelist3"] != NULL){
					echo '<tr>';
						echo '<td class="activity-table-title">Venue</td>';
						echo '<td>' . $row["asidelist3"] . '</td>';
					echo '</tr>';
				}
				if ($row["asidelist4"] != NULL){
					echo '<tr>';
						echo '<td class="activity-table-title">Location</td>';
						echo '<td>' . $row["asidelist4"] . '</td>';
					echo '</tr>';
				}
				if ($row["asidelist5"] != NULL){
					echo '<tr>';
						echo '<td class="activity-table-title">Email</td>';
						echo '<td>' . $row["asidelist5"] . '</td>';
					echo '</tr>';
				}
				if ($row["asidelist6"] != NULL){
					echo '<tr>';
						echo '<td class="activity-table-title">Website</td>';
						echo '<td>' . $row["asidelist6"] . '</td>';
					echo '</tr>';
				}
				if ($row["link1"] != NULL){
					echo '<tr>';
						echo '<td class="activity-table-title">Location Link</td>';
						echo '<td>' . $row["link1"] . '</td>';
					echo '</tr>';
				}
				if ($row["link2"] != NULL){
					echo '<tr>';
						echo '<td class="activity-table-title">Email Link</td>';
						echo '<td>' . $row["link2"] . '</td>';
					echo '</tr>';
				}
				if ($row["link3"] != NULL){
					echo '<tr>';
						echo '<td class="activity-table-title">Website Link</td>';
						echo '<td>' . $row["link3"] . '</td>';
					echo '</tr>';
				}
				if ($row["photo"] != NULL){
					echo '<tr>';
						echo '<td class="activity-table-title">Photo</td>';
						echo '<td>' . $row["photo"] . '</td>';
					echo '</tr>';
				}
				
				
				echo '<tr>';
					echo '<td class="activity-table-title">Edit Record</td>';
					echo '<td>';
						echo '<form method="get" action="edit_activity.php" class="edit-activity-unique">';
							echo '<input type="hidden" name="id" value="' . $row["id"] . '">';
							echo '<input type="submit" value="Edit" class="edit-btn-unique">';
						echo '</form>'; 
					echo '</td>';
				echo '</tr>';
				
				echo '<tr>';
					echo '<td class="activity-table-title">Delete Record</td>';
					echo '<td>';
						echo '<form method="post" action="delete_activity.php" onsubmit="return confirm(\'Are you sure you want to delete this record?\');" class="delete-activity-unique">';
							echo '<input type="hidden" name="id" value="' . $row["id"] . '">';
							echo '<input type="submit" value="Delete" class="delete-btn-unique">';
						echo '</form>';
					echo '</td>';
				echo '</tr>';

				echo '<tr>';
					echo '<td class="activity-table-title">View in Page</td>';
					echo '<td>';
						echo '<form method="post" action="view_activity.php" class="delete-activity-unique">';
							echo '<input type="submit" value="View" class="delete-btn-unique">';
						echo '</form>';
					echo '</td>';
				echo '</tr>';

				echo '</table>';
				echo '<br>'; 
                }
            } else {
                echo "0 results";
            }
            mysqli_close($conn);
            ?>

    </div>
</div>
</body>
</html>
