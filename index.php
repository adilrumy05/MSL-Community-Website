<!DOCTYPE html>
<html lang="en">

<head>
    <title>MSL | Index</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <meta charset="utf-8">
    <meta name="Author" content="Andrei Lo">
    <meta name="Description" content="Malaysia Sign Language Homepage">
    <meta name="keywords" content="Index, Homepage, MSL, Sign Language">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="stylesheet" type="text/css" href="styles/enhancement.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <?php include ('connection.php'); ?>
    <?php include ('logindatabase.php'); ?>
</head>

<body>
    
	<?php include 'navigationbar.php';?>

    <header>
        <div class="banner">
            <img src="images/index_banner_pic.png" alt="background picture" id="background_pic_index">

            <div class="bannertxt"> Embracing silence, living life to the fullest.
                Empowering the deaf community: Breaking Barries and creating opportunities.</div>

            <div class="login_signup_container">
                <div class="login-signup">

                        <input type="checkbox" id="signup">
                        <label for="signup">Sign Up</label>
                        <input type="checkbox" id="login">
                        <label for="login">Login</label>


                    <div class="signup-form">
                        <form method="post" action="signup_process.php" >
                            <label for="signupUsername">Username:</label>
                            <input type="text" id="signupUsername" name="signupUsername" pattern=".{5,}" minlength="5" title="Username must be at least 5 characters long" required>
                            <label for="signupPassword">Password:</label>
                            <input type="password" id="signupPassword" name="signupPassword" pattern=".{5,}" minlength="5" title="Password must be at least 5 characters long" required>
                            <button type="submit">Sign Up</button>
                        </form>
                    </div>
                    

                    <div class="login-form">
                        <form method="post" action="login_process.php" >
                            <label for="loginUsername">Username:</label>
                            <input type="text" id="loginUsername" name="loginUsername" pattern=".{5,}" minlength="5" title="Username must be at least 5 characters long" required>
                            <label for="loginPassword">Password:</label>
                            <input type="password" id="loginPassword" name="loginPassword" pattern=".{5,}" minlength="5" title="Password must be at least 5 characters long" required>
                            <button type="submit" name="loginSubmit">Login</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </header>
    <article>
        <div class="container">
            <h2>Our Mission</h2>

            <p class="index_mission"> Welcome to the website of the Malaysia Sign Language. Our mission is to help
                the deaf community to communicate easier by using AI to translates sign langauge
                into words. This system fuction live enabeling face to face communication and can
                be setup stretegically at places where communication is essential such as Hospital,
                pharmacy, governmental offices and more. Whether you're seeking sign language
                resources, speech-to-text tools, or community support, we're here to support
                you every step of the way. Together, let's bridge the communication gap and
                foster a more inclusive world for all.
            </p>
        </div>

        <div class="container">
            <h2>Announcement</h2>

            <div class="image-container">
                <img src="images/SSD_foodfair.jpg" alt="Your Image" id="SSD_foodfair" class="index_annou_pic">
                <img src="images/SSD_Womenday.jpg" alt="Your Image" id="SSD_Womenday" class="index_annou_pic">
                <img src="images/SSD_CNY.jpg" alt="Your Image" id="SSD_CNY" class="index_annou_pic">
                <img src="images/SSD_Congrats.jpg" alt="Your Image" id="SSD_Congrats" class="index_annou_pic">
            </div>
        </div>

        
    </article>




    <footer>
        <div class="footer-content">
            <div class="footer_link">
                <a href="index.php">
                    <img src="images/MSL_LOGO.PNG" alt="MSL_Logo">
                </a>
                <h2> Malaysia Sign Language </h2>
                <a href="acknowledgement.php">Acknowledgement</a>
                <a href="#top">Back to top</a>
                <a href="contactus.php">Contact Us</a>
                <a href="https://youtu.be/kqa5CYgnWFU">Youtube Demo</a>
                <a href="https://youtu.be/ja7iT7gIqeA">php Youtube Demo</a>
                <a href="logout.php">Log Out</a>
            </div>
        </div>
        <p> &#169; Malaysia Sign Language 2024. All Rights Reserved.</p>
    </footer>




</body>

</html>
