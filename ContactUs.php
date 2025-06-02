
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MSL | Contact Us</title>
    <link rel="stylesheet" href="styles/Style.css">
	<link rel="stylesheet" href="styles/enhancement.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <?php include 'navigationbar.php';?>
    
    <a href="#" class="scroll-to-top-btn contact-scroll-top-btn">&#x2191;</a> 
	
    <h4>Contact Us</h4>
    <div class="container contact-container">
        <form action="submit_form.php" method="post" class="form-css">
            <fieldset class="contact-fieldset">
                <h5>Send Us a Message</h5>
                <div class="form-row contact-form-row">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-row contact-form-row">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-row contact-form-row">
                    <label for="subject" class="form-label">Subject:</label>
                    <input type="text" id="subject" name="subject" required>
                </div>
                <div class="form-row contact-form-row">
                    <label for="message" class="form-label">Message:</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <div class="form-buttons contact-form-buttons">
                    <input type="submit" value="Send Message">
                    <input type="reset" value="Clear">
                </div>
            </fieldset>
            <div class="contact-info contact-icons">
                <a href="https://wa.me/60128118260" class="contact-icon"><i class="fab fa-whatsapp"></i></a>
                <a href="https://www.facebook.com/sarawaksocietyforthedeaf/" class="contact-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="mailto:ssdkuching1982@gmail.com" class="contact-icon"><i class="fas fa-envelope"></i></a>
            </div>
        </form>
    </div>
    
    <div class="container contact-map-container">
        <form action="submit_form.php" method="post" class="contact-form contact-map-form">
            <h4>Map</h4>
			<br>

            <div class="map contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15952.687144620147!2d110.3408184!3d1.5506632!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7d5d1b2e19b62f5a!2sSarawak%20Society%20for%20the%20Deaf!5e0!3m2!1sen!2smy!4v1652770809546!5m2!1sen!2smy" width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				
				 <h6>	Sarawak Society for the Deaf,   Lot 1862, Lorong Laksamana 8, Jalan Laksamana Cheng Ho, 93200 Kuching, Sarawak </h6>
				
            </div>
        </form>
    </div>
    
   <?php include 'footer.php';?>
	
</body>
</html>