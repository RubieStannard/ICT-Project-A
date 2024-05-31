<?php
	session_start(); // Start the session
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="ICT Project A Website" />
	<meta name="keywords" content="HTML, CSS, JavaScript, PHP" />
	<meta name="author" content="Group 2" />
	<link rel="stylesheet" href="style/profiles.css" type="text/css" />
	<title>ICT30017 - ICT Project A</title>
    <style>
        <?php include "style/profiles.css" ?>
    </style>
</head>
<body>
<?php
// Simulating user role, replace with actual logic to get user role
$userRole = '\staff';

// HTML navbar
echo '<ul class="navbar">';
echo '<li><a href="home.php">Home</a></li>';
echo '<li><a href="account.php">Account</a></li>';
echo '<li><a href="facilities.php">Facilities</a></li>';
echo '<li><a href="member_profile_list">Members</a></li>';
echo '<li><a href="schedule.php">Schedule</a></li>';
echo '<li><a href="services.php">Services</a></li>';


// Check if the user is an admin
if ($userRole === '\admin') {
    // Display the "Inventory" option for admins
    echo '<li><a href="inventory.php">Inventory</a></li>';
    echo '<li><a href="staff_profile_list.php">Staff</a></li>';
}

echo '</ul>';
?>
<p>CODE WITH PHP. LEAVE INFORMATION HERE UNTIL PHP IS CODED</p>
<p><b>General Information</b></p>
	<p>First name: Irina<p>
	<p>Last name: McDonnell<p>
	<p>Gender: Female</p>
	<p>Date of birth: 28/07/1978</p>
	<p>Phone number: 0432109876</p>
	<p>Address: 11 Hilltop Avenue<p>
	<p>Suburb: Mount Isa</p>
	<p>State: QLD</p>
	<p>Postcode: 4825</p>
    <p>Start date: 10/01/2008</p>
	<p>Position title: Admin</p>
	<p>Email address: irinamcdonne@gmail.com</p>
    <p>Tax file number: 04452109875</p>
	<p>Hourly pay rate: $27.00</p>
<p><b>Bank Details</b></p>
	<p>Bank name: Unity Credit Union</p>
	<p>Account name: Irina McDonnell</p>
	<p>BSB: 061234</p>
	<p>Account number: 54321098</p>
<p><b>Superannuation Details</b></p>
	<p>Super fund name: Queenslanders Retirement Fund</p>
	<p>ABN: 33444555666</p>
    <p>Address: 5 Mountain Vista Parade<p>
	<p>Suburb: Sunshine Coast</p>
	<p>State: QLD</p>
	<p>Postcode: 4558</p>
	<p>Membership number: QRF78901234</p>
<p><b>Emergency Contact</b></p>
	<p>Full name: Laurentius McDonnell</p>
	<p>Relationship: Father</p>
	<p>Phone number: 0423987610</p>
	<p>Address: 6 Beachfront Parade<p>
	<p>Suburb: Hervey Bay</p>
	<p>State: QLD</p>
	<p>Postcode: 4655</p>
<?php
	echo "<p>Need PHP that loads the profile after clicking the button</p>";
?>
    <footer><p><em>Copyright 2024</em></p></footer>
</body>
</html>