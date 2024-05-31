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
	<p>First name: Roderika<p>
	<p>Last name: Loux<p>
	<p>Gender: Female</p>
	<p>Date of birth: 15/05/1993</p>
	<p>Phone number: 0432109876</p>
	<p>Address: 8 Forest Hill Avenue<p>
	<p>Suburb: Noosa Heads</p>
	<p>State: QLD</p>
	<p>Postcode: 4567</p>
    <p>Start date: 20/07/2015</p>
	<p>Position title: Carer</p>
	<p>Email address: roderikaloux@gmail.com</p>
    <p>Tax file number: 123456789</p>
	<p>Hourly pay rate: $22.00</p>
<p><b>Bank Details</b></p>
	<p>Bank name: Horizon Bank</p>
	<p>Account name: Roderika Loux</p>
	<p>BSB: 064789</p>
	<p>Account number: 12345678</p>
<p><b>Superannuation Details</b></p>
	<p>Super fund name: Queensland Super Fund</p>
	<p>ABN: 12345678901</p>
    <p>Address: 15 Riverfront Avenue<p>
	<p>Suburb: Brisbane</p>
	<p>State: QLD</p>
	<p>Postcode: 4000</p>
	<p>Membership number: QSF78901234</p>
<p><b>Emergency Contact</b></p>
	<p>Full name: Edgar Loux</p>
	<p>Relationship: Father</p>
	<p>Phone number: 0419876543</p>
	<p>Address: 3 Sunset Boulevard<p>
	<p>Suburb: Airlie Beach</p>
	<p>State: QLD</p>
	<p>Postcode: 4802</p>
<?php
	echo "<p>Need PHP that loads the profile after clicking the button</p>";
?>
    <footer><p><em>Copyright 2024</em></p></footer>
</body>
</html>