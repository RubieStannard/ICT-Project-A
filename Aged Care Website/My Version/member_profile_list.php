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
	<link rel="stylesheet" href="style/profile_list.css" type="text/css" />
	<title>ICT30017 - ICT Project A</title>
    <style>
        <?php include "style/profile_list.css" ?>
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
<a href="member_profile_1.php" target="_blank">Yoel Lenigrast</a>
<br><br> <!--Break-->
<a href="member_profile_2.php" target="_blank">Emma Hewg</a>
<br><br> <!--Break-->
<a href="member_profile_3.php" target="_blank">Eina Bernahal</a>
<br><br> <!--Break-->
<a href="member_profile_4.php" target="_blank">Argo Haight</a>
<br><br> <!--Break-->
<a href="member_add_form.php" target="_blank">Add member</a>
<br><br> <!--Break-->
<div class="content">
    <div id="memberList" class="<?php echo ($userRole === '\admin') ? 'visible-to-all' : 'hidden-from-staff'; ?>">
    <a href="member_add_form.php" target="_blank">Add member</a>
    </div>
</div>
<?php
    echo "<p>Here</p>";
?>
    <footer><p><em>Copyright 2024</em></p></footer>
</body>
</html>