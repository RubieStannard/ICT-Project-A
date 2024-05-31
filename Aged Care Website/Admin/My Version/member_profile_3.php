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
	<p>First name: Eina<p>
	<p>Last name: Bernahal<p>
	<p>Gender: Female</p>
	<p>Date of birth: 20/06/1934</p>
	<p>Phone number: 0456123789</p>
	<p>Address: 123 Maple Street<p>
	<p>Suburb: Brisbane</p>
	<p>State: QLD</p>
	<p>Postcode: 4000</p>
<p><b>Medical Information</b></p>
	<p>Resting heart rate (bpm): 75</p>
	<p>Blood pressure (mmHg): 140/90</p>
	<p>Medical history: Osteoarthritis in knees for 15 years, occasional digestive discomfort</p>
	<p>Recent injuries: None</p>
	<p>Allergies: None</p>
	<p>Medication: None</p>
	<p>Medical conditions: None</p>
	<p>Do you smoke? No</p>
	<p>Do you drink alcohol? Yes</p>
	<p>Do you drink/use any caffeine products? Yes</p> 
<div class="content">
    <div id="healthcare" class="<?php echo ($userRole === '\admin') ? 'visible-to-all' : 'hidden-from-staff'; ?>">
		<p><b>Healthcare Information</b></p>
            <p>Insurer name: VitalCare Insurance</p>
	        <p>Insurance number: VC567890123</p>
	        <p>Medicare card number: 45678901230</p>
    </div>
</div>
<p><b>Emergency Contact</b></p>
	<p>Full name: Diallos Bernahal</p>
	<p>Relationship: Stepson</p>
	<p>Phone number: 0465789123</p>
	<p>Address: 30 River Street<p>
	<p>Suburb: Toowoomba</p>
	<p>State: QLD</p>
	<p>Postcode: 4350</p> 
<?php
	echo "<p>Need PHP that loads the profile after clicking the button</p>";
?>
    <footer><p><em>Copyright 2024</em></p></footer>
</body>
</html>