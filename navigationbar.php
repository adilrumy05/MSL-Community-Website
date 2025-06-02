
<?php include ('connection.php'); ?>
<?php include ('logindatabase.php'); ?>
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

  <nav>
        <a id="top"></a>
        <div class="smallnavbar_button">
            <div class="displayUsername">
                <?php
                    if (isset($_SESSION['username'])) {
                        echo "Welcome " . htmlspecialchars($_SESSION['username']); // Display the logged-in username
                    } else {
                        echo "Guest Account"; // Display "Guest Account" when not logged in
                    }
                ?>
            </div>
            <h1> Malaysia Sign Language </h1>
            <input type="checkbox" id="smallnav_button" name="smallnavbar_button">
            <label for="smallnav_button">&#8801;</label>
            <div class="small_nav">
                <ul class="smallnavbar">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="activities.php">Activities</a></li>
                    <li><a href="enquiryservice.php">Enquiry</a></li>
                    <li><a href="Joinvolunteer.php">Volunteer</a></li>
                    <li><a href="members.php">Members</a></li>
                </ul>
                <ul class="smallnavbar">
                    <li><a href="enhancement.php">Enhancement</a></li>
                    <li><a href="service1.php">BIM Class</a></li>
                    <li><a href="service2.php">Charity Car Wash</a></li>
                    <li><a href="service3.php">Haircut and Trimming</a></li>
                    <li><a href="service4.php">Sewing and Alteration</a></li>
                </ul>
            </div>
        </div>

        <div class="big_nav">
           <div class="displayUsername">
                <?php
                if (isset($_SESSION['username'])) {
                    echo "Welcome " . htmlspecialchars($_SESSION['username']); // Display the logged-in username
                } else {
                    echo "Guest Account"; // Display "Guest Account" when not logged in
                }
                ?>
            </div>
            <img src="images/MSL_LOGO.png" alt="MSL_logo" width="71" height="71" class="logo">
            <h1>Malaysia Sign Language</h1>
            <ul class="navbar">
                <li><a href="index.php">Home</a></li>
                <li class="service_drop"><a href="Service.php">Services</a>
                    <ul class="dropdown_content">
                        <li><a href="service1.php">BIM Class</a></li>
                        <li><a href="service2.php">Charity Car Wash</a></li>
                        <li><a href="service3.php">Haircut and Trimming</a></li>
                        <li><a href="service4.php">Sewing and Alteration</a></li>
                    </ul>
                </li>
                <li><a href="activities.php">Activities</a></li>
                <li><a href="enquiryservice.php">Enquiry</a></li>
                <li><a href="Joinvolunteer.php">Volunteer</a></li>
                <li><a href="Enhancement.php">Enhancement</a></li>
                <li><a href="members.php">Members</a></li>
            </ul>
        </div>

    </nav>