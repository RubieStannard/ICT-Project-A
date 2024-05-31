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
	<p>First name: Rickert<p>
	<p>Last name: Astora<p>
	<p>Gender: Male</p>
	<p>Date of birth: 05/11/1981</p>
	<p>Phone number: 0479876543</p>
	<p>Address: 7 Lakeside Crescent<p>
	<p>Suburb: Townsville</p>
	<p>State: QLD</p>
	<p>Postcode: 4810</p>
    <p>Start date: 15/03/2010</p>
	<p>Position title: Admin</p>
	<p>Email address: rickertastora@gmail.com</p>
    <p>Tax file number: 456789012</p>
	<p>Hourly pay rate: $25.00</p>
<p><b>Bank Details</b></p>
	<p>Bank name: Coastal Savings</p>
	<p>Account name: Rickert Astora</p>
	<p>BSB: 032109</p>
	<p>Account number: 87654321</p>
<p><b>Superannuation Details</b></p>
	<p>Super fund name: Great Barrier Reef Super</p>
	<p>ABN: 55321987654</p>
    <p>Address: 10 Coral View Road<p>
	<p>Suburb: Cairns</p>
	<p>State: QLD</p>
	<p>Postcode: 4870</p>
	<p>Membership number: GBS67890123</p>
<p><b>Emergency Contact</b></p>
	<p>Full name: Reah Astora</p>
	<p>Relationship: Wife</p>
	<p>Phone number: 0467543210</p>
	<p>Address: 7 Lakeside Crescent<p>
	<p>Suburb: Townsville</p>
	<p>State: QLD</p>
	<p>Postcode: 4810</p>
<?php
	echo "<p>Need PHP that loads the profile after clicking the button</p>";
?>
    <footer><p><em>Copyright 2024</em></p></footer>
</body>
</html>