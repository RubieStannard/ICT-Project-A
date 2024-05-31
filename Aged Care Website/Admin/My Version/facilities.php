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
	<link rel="stylesheet" href="style/facilities.css" type="text/css" />
	<title>ICT30017 - ICT Project A</title>
    <style>
        <?php include "style/facilities.css" ?>
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
<div class="content">
    <div id="facilityInfo" class="visible-to-all">
		<p><b>Tranquil Haven Aged Care</b></p>
			<p>Address: 123 Maple Street<p>
			<p>Suburb: Brisbane</p>
			<p>State: Queensland</p>
			<p>Postcode: 4000</p>
			<p>Phone number: (07)12345678</p>
			<p>ABN: 98765432109</p>
		<img src="style/facility_layout.png" alt="Aged Care Property Layout" width="100%">
    </div>
    <div id="house" class="visible-to-all">
		<p><b>Housekeeping</b></p>
			<p>Room cleanliness<p>
				<ul>
					<li>95% of rooms cleaned daily</li>
					<li>Average time taken to clean each room: 30 minutes</li>
				</ul>
			<p>Laundry services</p>
				<ul>
					<li>Turnaround time for laundry services: 24 hours</li>
					<li>98% of laundry items returned without damage or loss</li>
				</ul>
    </div>
    <div id="metric" class="<?php echo ($userRole === '\admin') ? 'visible-to-all' : 'hidden-from-staff'; ?>">
			<p>Safety and security</p>
				<ul>
					<li>Number of safety incidents: 10 per month</li>
					<li>Security incidents: 2 per month</li>
					<li>Emergency response time: 5 minutes</li>
				</ul>
		<p><b>Utility metrics</b></p>
			<p>Energy consumption<p>
				<ul>
					<li>Total energy consumed: 10,000 kWh per month</li>
					<li>Average energy consumption per resident: 300 kWh/resident/month</li>
					<li>Energy consumption by type:</li>
					<ul>
						<li>Electricity: 80%</li>
						<li>Gas: 20%</li>
						<li>Renewable energy usage percentage: 20%</li>
					</ul>
				</ul>
			<p>Water usage</p>
				<ul>
					<li>Total water consumption: 50,000 Liters per month</li>
					<li>Average water usage per resident: 1,500 Liters/resident/month</li>
					<li>Water usage for different purposes:</li> 
					<ul>
						<li>Drinking: 30%</li>
						<li>Bathing: 50%</li>
						<li>Laundry: 20%</li>
					</ul>
				</ul>
			<p>Waste management</p>
				<ul>
					<li>Total waste generated: 5,000 kg per month</li>
					<li>Waste diversion rate: 60%</li>
					<li>Recycling rate: 40%</li>
				</ul>
			<p>Sewerage</p>
				<ul>
					<li>Total volume of sewage generated: 50,000 Liters per month</li>
					<li>Average volume of sewage per resident: 1,500 Liters/resident/month</li>
					<li>Percentage of sewage treated: 90%</li>
				</ul>
	</div>
</div>
    <footer><p><em>Copyright 2024</em></p></footer>
</body>
</html>