<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Enquiry of services" />
	<meta name="keywords" content="MSL, services enquiry" />
	<meta name="author" content="Adil Rumy"  />
	<link rel="stylesheet" href="styles/Style.css">
	<link rel="stylesheet" href="styles/enhancement.css">
	<title>MSL | Enquiry</title>
	<link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body>

	<?php include ('connection.php'); ?>
	<?php include ('database.php'); ?>
	
	<?php include 'navigationbar.php';?>
	
	
	
	<div class="form-container">	
		<div class="pic-container">
			<div class="pic-slider">
				<img src="Images/haircutslide.png" class="img-slide" alt="haircutslide">
				<img src="Images/carslide.png" class="img-slide" alt="carwashslide">
				<img src="Images/sign1slide.png" class="img-slide" alt="bimslide">
				<img src="Images/Sewingslide.png" class="img-slide" alt="sewingslide">
			</div>
		</div>
		
		<div class="mid">
			<br>
			<h4 class="h4-form">INTERESTED IN THE SERVICES?</h4>
			<br>

			<form method="post" action="EnquiryService_process.php"  class="form-css">
				<h5>Personal information:</h5>
				<fieldset>
					
					<div class="main">
						<div class="col1">
							<label for="fname" class="form-label">First Name: </label>
						</div>
						<div class="col2">
							<input type="text" name= "fname" id="fname" maxlength="25" title="Does not contain spaces or special characters! Max length = 25" required="required" placeholder="First Name" pattern="[A-Za-z]+"/>
						</div>
					</div>
					<div class="main">
						<div class="col1">
							<label for="lname" class="form-label">Last Name: </label>
						</div>
						<div class="col2">
							<input type="text" name= "lname" id="lname" maxlength="25" title="Does not contain spaces or special characters! Max length = 25" required="required" placeholder="Last Name" pattern="[A-Za-z]+"/>
						</div>
					</div>
					<div class="main">
						<div class="col1">
							<label for="phoneno" class="form-label">Phone Number: </label>
						</div>
						<div class="col2">
							<input type="tel" id="phoneno" name="phoneno" pattern="[0-9]{11,15}" placeholder="e.g. 60123456789" title="Please enter a phone number between 11 and 15 digits" required="required">
						</div>
					</div>
					<div class="main">
						<div class="col1">
							<label for="email" class="form-label">Email: </label> 
						</div>
						<div class="col2">
							<input type="email" name="email" id="email" title="Enter in the format Email@example.com" required="required" placeholder="Email@example.com">
						</div>
					</div>
					
					
					<p id="comlegend">Preferred  communication: </p>
					<div class="prefcoms">
						
						<p>
						
							<label for="smschoice" class="form-label"><input type="radio" id="smschoice" name="communication" value="sms"/>SMS</label> 
							<label for="emailchoice" class="form-label"><input type="radio" id="emailchoice" name="communication" value="email"/>Email</label> 
							<label for="emailandsmschoice" class="form-label"><input type="radio" id="emailandsmschoice" name="communication" value="Email And SMS" checked="checked" required="required" />Email and SMS</label> 
						
						</p>
					</div>
				</fieldset>
			
				
				<h5>The Service:</h5>
				<fieldset>
					
					<div class="main">
						<div class="col1">
							<label for="service" class="form-label">Choose your service:</label> 
						</div>
						
						<div class="col2">
							<select class="form-select" name="service" id="service" required="required" >
								<option value="" disabled selected>Please select</option>
								<option value="BIM">BIM Class</option>
								<option value="CarWash">Charity Car wash</option>
								<option value="Haircut">Haircut and Trimming</option>
								<option value="Sewing">Sewing and Alteration</option>
							</select>
						</div>
					</div>
					<br>
				</fieldset>		
				
				<h5>Appointment:</h5>
				<fieldset>
					
					<div class="main">
						<div class="col1">
							<label for="date" class="form-label">Date: </label> 
						</div>
						<div class="col2">
							<input type="date" name= "date" id="date" required="required" />
						</div>
					</div>
					<div id="space" class="main">
						<div class="col1">
							<label for="time" class="form-label">Time: </label> 
						</div>
						<div class="col2">
							<input type="time" name= "time" id="time" required="required" />
						</div>
						
					</div>
				</fieldset>
			
				<div class="main">
					<div class="det1">
						<label for="details" class="form-label">Any more details to be known?</label>
					</div>
					<div class="detinput">
						<textarea id="details" name="details" rows="4" cols="40" placeholder="write down any extra details..." ></textarea>
					</div>
				</div>
				
				<div class="main" id="btn" >
					<input type= "submit" value="Submit"/>
					<input type= "reset" value="Reset Form"/>
				</div>
			</form>
		</div>
	</div>
	<a href="#" class="scroll-to-top-btn contact-scroll-top-btn">&#x2191;</a> 
	<?php include 'footer.php';?>
</body>
</html>