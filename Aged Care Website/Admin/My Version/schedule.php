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
	<link rel="stylesheet" href="style/schedule.css" type="text/css" />
	<title>ICT30017 - ICT Project A</title>
    <style>
        <?php include "style/schedule.css" ?>
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
<h1>TIME TABLE</h1>
	<table>
		<tr>
			<th>Day</th>
			<th>9:30-10:30</th>
			<th>10:30-11:30</th>
			<th>11:30-12:30</th>
			<th>12:30-1:30</th>
			<th>1:30-2:30</th>
			<th>3:30-4:30</th>
			<th>4:30-5:30</th>
			<th>6:30-7:30</th>
		</tr>
		<tr>
			<td class="highlight"><b>Monday</b></td>
			<td>Eng</td>
			<td>Mat</td>
			<td>Che</td>
			<td rowspan="6" class="special"><b>LUNCH</b></td>
			<td colspan="3" class="special">LAB</td>
			<td>DINNER</td>
		</tr>
		<tr>
			<td class="highlight"><b>Tuesday</b></td>
			<td colspan="3" class="special">LAB</td>
			<td>Eng</td>
			<td>Che</td>
			<td>Mat</td>
			<td class="special">DINNER</td>
		</tr>
		<tr>
			<td class="highlight"><b>Wednesday</b></td>
			<td>Mat</td>
			<td>Phy</td>
			<td>Eng</td>
			<td>Che</td>
			<td colspan="3">DINNER</td>
		</tr>
		<tr>
			<td class="highlight"><b>Thursday</b></td>
			<td>Phy</td>
			<td>Eng</td>
			<td>Che</td>
			<td colspan="3" class="special">LAB</td>
			<td>DINNER</td>
		</tr>
		<tr>
			<td class="highlight"><b>Friday</b></td>
			<td colspan="3" class="special">LAB</td>
			<td>Mat</td>
			<td>Che</td>
			<td>Eng</td>
			<td>DINNER</td>
		</tr>
		<tr>
			<td class="highlight"><b>Saturday</b></td>
			<td>Eng</td>
			<td>Che</td>
			<td>Mat</td>
			<td colspan="3">SEMINAR</td>
			<td class="special">DINNER</td>
		</tr>
	</table>
<?php
	echo "<p>Here</p>";
?>
    <footer><p><em>Copyright 2024</em></p></footer>
</body>
</html>