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
	<p>First name: Emma<p>
	<p>Last name: Hewg<p>
	<p>Gender: Female</p>
	<p>Date of birth: 05/09/1939</p>
	<p>Phone number: 0430987654</p>
	<p>Address: 123 Maple Street<p>
	<p>Suburb: Brisbane</p>
	<p>State: QLD</p>
	<p>Postcode: 4000</p>
<p><b>Medical Information</b></p>
	<p>Resting heart rate (bpm): 65</p>
	<p>Blood pressure (mmHg): 130/85</p>
	<p>Medical history: Diagnosed with hyperlipidemia 5 years ago, hypertension managed with medication for 2 years</p>
	<p>Recent injuries: Minor cut on the forehead from bumping into furniture</p>
	<p>Allergies: None</p>
	<p>Medication: Ramipril (5mg, daily), Atorvastatin (20mg, daily)</p>
	<p>Medical conditions: Hypertension, Hyperlipidemia</p>
	<p>Do you smoke? No</p>
	<p>Do you drink alcohol? No</p>
	<p>Do you drink/use any caffeine products? Yes</p>
<div class="content">
    <div id="healthcare" class="<?php echo ($userRole === '\admin') ? 'visible-to-all' : 'hidden-from-staff'; ?>">
		<p><b>Healthcare Information</b></p>
			<p>Insurer name: MedCover Insurance</p>
			<p>Insurance number: MC789012345</p>
			<p>Medicare card number: 09876543210</p>
    </div>
</div>
<p><b>Emergency Contact</b></p>
	<p>Full name: Alexander Hewg</p>
	<p>Relationship: Son</p>
	<p>Phone number: 0443210987</p>
	<p>Address: 15 Palm Grove<p>
	<p>Suburb: Port Douglas</p>
	<p>State: QLD</p>
	<p>Postcode: 4877</p>
<?php
	echo "<p>Need PHP that loads the profile after clicking the button</p>";
?>
    <footer><p><em>Copyright 2024</em></p></footer>
</body>
</html>