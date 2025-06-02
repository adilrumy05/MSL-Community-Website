<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Enquiry of services" />
	<meta name="keywords" content="MSL, services enquiry" />
	<meta name="author" content="Adil Rumy"  />
	<link rel="stylesheet" href="styles/Style.css">
	<link rel="stylesheet" href="styles/enhancement.css">
	<title>MSL | Add Activity</title>
	<link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body>

	<?php include ('connection.php'); ?>
	<?php include ('database.php'); ?>
	
	
	
	<div class="activity-form-container">	
		<div class="mid">
			<br>
			<h4 class="h4-form">Add to Activity</h4>
			<br>

			<form method="post" action="AddActivity_process.php"  class="form-css">
				<h5>Main Information:</h5>
				<fieldset>
					<div class="main">
						<div class="col1">
							<label for="title" class="form-label">Title: </label>
						</div>
						<div class="col2">
							<input type="text" name= "title" id="title" maxlength="50" placeholder="Title" required="required"/>
						</div>
					</div>
					<div class="main">
						<div class="col1">
							<label for="description1" class="form-label">Description: </label>
						</div>
						<div class="col2">
							<input type="text" name= "description1" id="description1" placeholder="Description" required="required" />
						</div>
					</div>
					<div class="main">
						<div class="col1">
							<label for="photo" class="form-label">Photo: </label>
						</div>
						<div class="col2">
							<input type="text" id="photo" name="photo" placeholder="e.g. example.png" required="required" />
						</div>
					</div>
				</fieldset>
				
				<h5>Any Points?:</h5>
				<fieldset>
					<div class="main">
						<div class="col1">
							<label for="list1" class="form-label">Point 1: </label>
						</div>
						<div class="col2">
							<input type="text" id="list1" name="list1" placeholder="Point 1 for a list" />
						</div>
					</div>
					<div class="main">
						<div class="col1">
							<label for="list2" class="form-label">Point 2: </label>
						</div>
						<div class="col2">
							<input type="text" id="list2" name="list2" placeholder="Point 2 for a list" />
						</div>
					</div>
					<div class="main">
						<div class="col1">
							<label for="list3" class="form-label">Point 3: </label>
						</div>
						<div class="col2">
							<input type="text" id="list3" name="list3" placeholder="Point 3 for a list" />
						</div>
					</div>
					<div class="main">
						<div class="col1">
							<label for="list4" class="form-label">Point 4: </label>
						</div>
						<div class="col2">
							<input type="text" id="list4" name="list4" placeholder="Point 4 for a list" />
						</div>
					</div>
					<div class="main">
						<div class="col1">
							<label for="list5" class="form-label">Point 5: </label>
						</div>
						<div class="col2">
							<input type="text" id="list5" name="list5" placeholder="Point 5 for a list" />
						</div>
					</div>
				</fieldset>
				
				<h5>Extra Information:</h5>
				<fieldset>
					<div class="main">
						<div class="col1">
							<label for="description2" class="form-label">Extra Description: </label>
						</div>
						<div class="col2">
							<input type="text" name= "description2" id="description2" placeholder="Description 2"/>
						</div>
					</div>
					<div class="main">
						<div class="col1">
							<label for="list6" class="form-label">Extra Point 1: </label>
						</div>
						<div class="col2">
							<input type="text" id="list6" name="list6" placeholder="Point 1 for the extra list" />
						</div>
					</div>
					<div class="main">
						<div class="col1">
							<label for="list7" class="form-label"> Extra Point 2: </label>
						</div>
						<div class="col2">
							<input type="text" id="list7" name="list7" placeholder="Point 2 for a the extra list" />
						</div>
					</div>
					<div class="main">
						<div class="col1">
							<label for="list8" class="form-label"> Extra Point 3: </label>
						</div>
						<div class="col2">
							<input type="text" id="list8" name="list8" placeholder="Point 3 for a the extra list" />
						</div>
					</div>
				</fieldset>
				
				<h5>Aside Information (All fields needs to be filled to be displayed):</h5>
				<fieldset>
					<div class="main">
						<div class="col1">
							<label for="asidelist1" class="form-label">Event date: </label>
						</div>
						<div class="col2">
							<input type="text" name= "asidelist1" id="asidelist1" placeholder="Event date"/>
						</div>
					</div>
					<div class="main">
						<div class="col1">
							<label for="asidelist2" class="form-label">Activity time: </label>
						</div>
						<div class="col2">
							<input type="text" name= "asidelist2" id="asidelist2" placeholder="Activity time"/>
						</div>
					</div>
					<div class="main">
						<div class="col1">
							<label for="asidelist3" class="form-label">Venue: </label>
						</div>
						<div class="col2">
							<input type="text" name= "asidelist3" id="asidelist3" placeholder="Venue"/>
						</div>
					</div>
					<div class="main">
						<div class="col1">
							<label for="asidelist4" class="form-label">Location: </label>
						</div>
						<div class="col2">
							<input type="text" name= "asidelist4" id="asidelist4" placeholder="Location"/>
						</div>
					</div>
					<div class="main">
						<div class="col1">
							<label for="asidelist5" class="form-label">Email: </label>
						</div>
						<div class="col2">
							<input type="text" name= "asidelist5" id="asidelist5" placeholder="Email"/>
						</div>
					</div>
					<div class="main">
						<div class="col1">
							<label for="asidelist6" class="form-label">Website: </label>
						</div>
						<div class="col2">
							<input type="text" name= "asidelist6" id="asidelist6" placeholder="Website"/>
						</div>
					</div>
					<div class="main">
						<div class="col1">
							<label for="link1" class="form-label">Location Link: </label>
						</div>
						<div class="col2">
							<input type="text" name= "link1" id="link1" placeholder="Location Link"/>
						</div>
					</div>
					<div class="main">
						<div class="col1">
							<label for="link2" class="form-label">Email Link: </label>
						</div>
						<div class="col2">
							<input type="text" name= "link2" id="link2" placeholder="Email Link"/>
						</div>
					</div>
					<div class="main">
						<div class="col1">
							<label for="link3" class="form-label">Website Link: </label>
						</div>
						<div class="col2">
							<input type="text" name= "link3" id="link3" placeholder="Website Link"/>
						</div>
					</div>
					
				</fieldset>
				
				
				
				<div class="main" class="add-record-submit" >
					<input type= "submit" value="Submit Form"/>
				
					<input type= "reset" value="Reset Form"/>
				</div>
			</form>

		</div>
		<form method="post" action="management.php" class="add-form">
			<input type="submit" value="Return Back" class="return-col2">
		</form>
	</div>
	<a href="#" class="scroll-to-top-btn contact-scroll-top-btn">&#x2191;</a> 
</body>
</html>