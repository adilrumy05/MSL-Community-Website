<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MSL | Volunteering</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="styles/Style.css">
	<link rel="stylesheet" href="styles/enhancement.css">
	

</head>

<body>
	<?php 
	include 'connection.php';
	include 'database.php';
	include 'navigationbar.php';
	?>
	
<a href="#" class="scroll-to-top-btn">&#x2191;</a> 

    <div class="form-container">
		<div class="pic-container">
			<div class="pic-slider">
				<img src="Images/haircutslide.png" class="img-slide" alt="haircutslide">
				<img src="Images/carslide.png" class="img-slide" alt="carwashslide">
				<img src="Images/sign1slide.png" class="img-slide" alt="bimslide">
				<img src="Images/Sewingslide.png" class="img-slide" alt="sewingslide">
			</div>
		</div>
		
        <h4 class="h4-form">VOLUNTEER</h4>
        <form id="volunteerForm" action="joinvolunteer_process.php" method="post" class="form-css">
		
		         <h5 class="personalinfo-h5">Personal Information</h5>
            <fieldset>
              
                <div class="form-row">
                    <label for="firstName" class="form-label">First Name:</label>
                    <input type="text" id="firstName" name="fname" pattern="[A-Za-z]+" maxlength="25" placeholder="First Name" title="Does not contain spaces or special characters! Max length = 25" required>
                </div>
                <div class="form-row">
                    <label for="lastName" class="form-label">Last Name:</label>
                    <input type="text" id="lastName" name="lname" pattern="[A-Za-z]+" maxlength="25" placeholder="Last Name" title="Does not contain spaces or special characters! Max length = 25" required>
                </div>
                <div class="form-row">
                    <label for="email" class="form-label">Email Address:</label>
                    <input type="email" id="email" name="email" placeholder="Email@example.com" title="Enter in the format Email@example.com" required>
                </div>
            </fieldset>
			
			
			         <h5>Address</h5>
            <fieldset>
       
                <div class="form-row">
                    <label for="street" class="form-label">Street Address:</label>
                    <input type="text" id="street" name="street" maxlength="50" placeholder="123 Main St" title="50 characters max allowed!" required>
                </div>
                <div class="form-row">
                    <label for="city" class="form-label">City/Town:</label>
                    <input type="text" id="city" name="city" maxlength="20" placeholder="Kuching" title="20 characters max allowed!" required>
                </div>
                <div class="form-row">
                    <label for="state" class="form-label">State:</label>
                    <select class="form-select" id="state" name="state" required>
                        <option value="" disabled selected>Select your state</option>
                        <option value="Johor">Johor</option>
                        <option value="Kedah">Kedah</option>
                        <option value="Kelantan">Kelantan</option>
                        <option value="Malacca">Malacca</option>
                        <option value="Negeri Sembilan">Negeri Sembilan</option>
                        <option value="Pahang">Pahang</option>
                        <option value="Penang">Penang</option>
                        <option value="Perak">Perak</option>
                        <option value="Perlis">Perlis</option>
                        <option value="Sabah">Sabah</option>
                        <option value="Sarawak">Sarawak</option>
                        <option value="Selangor">Selangor</option>
                        <option value="Terengganu">Terengganu</option>
                        <option value="Kuala Lumpur">Kuala Lumpur</option>
                        <option value="Labuan">Labuan</option>
                        <option value="Putrajaya">Putrajaya</option>
                    </select>
                </div>
                <div class="form-row">
                    <label for="postcode" class="form-label">Postcode:</label>
                    <input type="text" id="postcode" name="postcode" pattern="[0-9]{5}" placeholder="12345" title="Please enter exactly 5 digits" required>
                </div>
                <div class="form-row">
                    <label for="phone" class="form-label">Phone Number:</label>
                    <input type="tel" id="phone" name="phoneno" placeholder="Enter phone number (11-15 digits)" pattern="[0-9]{11,15}" title="Please enter a phone number between 11 and 15 digits" required>
                </div>
            </fieldset>
			
			 <h5>Volunteer Information</h5>
            <fieldset>
               
                <div class="form-row">
                    <label for="volunteerType" class="form-label">Volunteer Type:</label>
                    <select class="form-select" id="volunteerType" name="volunteerType" required>
                        <option value="" disabled selected>Select your volunteer type</option>
                        <option value="Teaching Assistant">Teaching Assistant</option>
                        <option value="Sign Language Illustrator">Sign Language Video Illustrator</option>
                        <option value="Sign Language Tutor">Sign Language Tutor</option>
                        <option value="Event Organizer">Event Organizer</option>
                        <option value="Technology Support">Technology Support</option>
                        <option value="Art and Culture Program Assistant">Art and Culture Program Assistant</option>
                        <option value="Sports Coach or Fitness Instructor">Sports Coach or Fitness Instructor</option>
                        <option value="Mentorship Program Volunteer">Mentorship Program Volunteer</option>
                        <option value="Administrative Support">Administrative Support</option>
						<option value="Outreach and Advocacy Volunteer">Outreach and Advocacy Volunteer</option>
						<option value="Research Assistant">Research Assistant</option>
						<option value="Teaching Assistant">BIM Class</option>
						<option value="Sign Language Illustrator">Car Wash</option>
						<option value="Sign Language Tutor">Haircut / Trimming</option>
						<option value="Event Organizer">Sewing/ Alterations</option>
					
					</select>
					</div>

					</fieldset>
					
						<h5>Availability</h5>
					<fieldset>
				
					<div class="form-row">
					<label for="Date" class="form-label">Date:</label>
					<input type="date" id="Date" name="date" required>
					</div>
					<div class="form-row">
					<label for="Time" class="form-label">Time:</label>
					<input type="time" id="Time" name="time" required >
					</div>
					<div class="form-row">
					
					
					</div>
					<div class="form-row">
					<label for="Interest" class="form-label">Areas of Interest:</label>
					<input type="text" id="Interest" name="Interest" maxlength="500" placeholder="Areas of Interest" title ="500 characters max allowed!" required>
					</div>
					<div class="form-row">
					<label class="form-label">How did you find us?:</label>
					<input type="text" id="findus" name="findus" maxlength="100" placeholder="How did you find us?" title ="100 characters max allowed!" required>
					</div>
					<div class="audio-container">
						<label class="form-label">Thank You, Volunteers!:</label>
						<audio controls src="Images/ThankYou.mp4"></audio>
					</div>
					</fieldset>
					
			
					
					<div class="main" id="btn" >
					<input type= "submit" value="Submit"/>
					<input type= "reset" value="Reset"/>			
				    </div>
					
					</form>
					</div>
					
					
					<?php include 'footer.php';?>

					</body>
					</html>
