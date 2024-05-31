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
	<p>First name: Yuria<p>
	<p>Last name: Varre<p>
	<p>Gender: Female</p>
	<p>Date of birth: 10/06/1986</p>
	<p>Phone number: 0454321098</p>
	<p>Address: 20 Coral Reef Drive<p>
	<p>Suburb: Bundaberg</p>
	<p>State: QLD</p>
	<p>Postcode: 4670</p>
    <p>Start date: 05/09/2013</p>
	<p>Position title: Nurse</p>
	<p>Email address: yuriavarre@outlook.com</p>
    <p>Tax file number: 987654321</p>
	<p>Hourly pay rate: $35.00</p>
<p><b>Bank Details</b></p>
	<p>Bank name: Pacific Trust Bank</p>
	<p>Account name: Yuria Varre</p>
	<p>BSB: 062543</p>
	<p>Account number: 98765432</p>
<p><b>Superannuation Details</b></p>
	<p>Super fund name: Sunshine State Superannuation</p>
	<p>ABN: 98765432109</p>
    <p>Address: 25 Parkview Terrace<p>
	<p>Suburb: Gold Coast</p>
	<p>State: QLD</p>
	<p>Postcode: 4217</p>
	<p>Membership number: SSS45678901</p>
<p><b>Emergency Contact</b></p>
	<p>Full name: Gael Varre</p>
	<p>Relationship: Husband</p>
	<p>Phone number: 0486654321</p>
	<p>Address: 20 Coral Reef Drive<p>
	<p>Suburb: Bundaberg</p>
	<p>State: QLD</p>
	<p>Postcode: 4670</p>
<?php
	echo "<p>Need PHP that loads the profile after clicking the button</p>";
?>
    <footer><p><em>Copyright 2024</em></p></footer>
</body>
</html>