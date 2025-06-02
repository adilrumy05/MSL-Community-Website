<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aria";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql_check = "SELECT COUNT(*) as count FROM activities";
$result = mysqli_query($conn, $sql_check);
$row = mysqli_fetch_assoc($result);

if ($row['count'] == 0) {
    $sql_insert = "INSERT INTO activities (title, description1, description2, list1, list2, list3, list4, list5, list6, list7, list8, asidelist1, asidelist2, asidelist3, asidelist4, asidelist5, asidelist6, link1, link2, link3, photo) VALUES
    ('Charity Food Fair', 'Purchase a coupon worth RM100 each, and get a chance to purchase various items on the day of the charity bazaar to support the Sarawak Society of the Deaf (SSD) in raising RM300,000 for the benefit of the deaf community. Your donation will help the deaf community in:', 'In addition to purchasing coupons for the bazaar above, you can also: Set up a booth:', 'Starting sign language teaching classes(BIM Classes)', 'Association’s leisure corner Brews & Bites Café', 'Early Intervention Community Programme', 'Deaf Video Broadcasting Project', 'Facility Upgrade of the association',  'Showcase your business or services at a bazaar.', 'Item Donation: Provide items for the deaf to sell at the bazaar.', 'Cash Donation: Directly assist SSD’s goals financially.', 'April 7, 2024 (Sunday)', '8:00 AM - 12:30 PM', 'Association of Churches, Jalan Stampin, Kuching, Sarawak', 'Google Maps', 'ssdkuching1982@gmail.com', 'Sarawak Society for the Deaf', 'https://maps.app.goo.gl/hRgSr6FawkiLySKx7', 'mailto:ssdkuching1982@gmail.com', 'https://www.sarawaksocietyforthedeaf.org/', 'FoodFair.jpg'),
    ('Unity Charity & Culture Dinner', 'Our Team Sharing A Table', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CNY1.jpg'),
    (NULL, 'The National Consumer Action Council - Sarawak (MTPN) and the Malaysian Sustainable Society Foundation (YMLM) generously donate RM3000 to Sarawak Society for Deaf (SSD)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CNY2.jpg'),
    ('Sulam BIM Poetry Project Closing Ceremony between UNIMAS/SSD', 'Secretary Helena Lim Giving Lecture On Behalf Of SSD.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Poet1.jpg'),
    (NULL, 'A group photo was taken with Dr. Dolly (UNIMAS lecturer), five UNIMAS students together with SSD committee and staff.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Poet2.jpg'),
    ('Sarawak Energy Isthmus Run 2023', 'Sarawak Energy Berhad Organized A Marathon Event Sarawak Energy Isthmus Run 2023.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Run1.jpg'),
    (NULL, 'Sarawak Energy Berhad presented a donation to SSD represented by Chairman Albert Wong.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Run2.jpg')";

    if (mysqli_query($conn, $sql_insert)) {
        echo "";
    } else {
        echo "Error: " . $sql_insert . "<br>" . mysqli_error($conn);
    }
} 

mysqli_close($conn);
?>