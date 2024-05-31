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
	<p>First name: Argo<p>
	<p>Last name: Haight<p>
	<p>Gender: Male</p>
	<p>Date of birth: 15/11/1950</p>
	<p>Phone number: 0487654321</p>
	<p>Address: 10 Coral Street<p>
	<p>Suburb: Cairns</p>
	<p>State: QLD</p>
	<p>Postcode: 4870</p>
<p><b>Medical Information</b></p>
	<p>Resting heart rate (bpm): 80</p>
	<p>Blood pressure (mmHg): 150/95</p>
	<p>Medical history: History of high blood pressure for 5 years, occasional headaches</p>
	<p>Recent injuries: Sprained ankle, minor cut on hand</p>
	<p>Allergies: None</p>
	<p>Medication: Losartan 50mg once daily</p>
	<p>Medical conditions: High blood pressure</p>
	<p>Do you smoke? No</p>
	<p>Do you drink alcohol? No</p>
	<p>Do you drink/use any caffeine products? Yes</p> 
<div class="content">
    <div id="healthcare" class="<?php echo ($userRole === '\admin') ? 'visible-to-all' : 'hidden-from-staff'; ?>">
		<p><b>Healthcare Information</b></p>
            <p>Insurer name: HealthGuard Australia</p>
	        <p>Insurance number: HGA234567890</p>
	        <p>Medicare card number: 34567890123</p>
    </div>
</div>
<p><b>Emergency Contact</b></p>
	<p>Full name: Fia Haight</p>
	<p>Relationship: Daughter</p>
	<p>Phone number: 0478321654</p>
	<p>Address: 12 Mountain View Road<p>
	<p>Suburb: Maleny</p>
	<p>State: QLD</p>
	<p>Postcode: 4552</p>
<?php
	echo "<p>Need PHP that loads the profile after clicking the button</p>";
?>
    <footer><p><em>Copyright 2024</em></p></footer>
</body>
</html>