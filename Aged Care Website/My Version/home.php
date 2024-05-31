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
    <link rel="stylesheet" href="style/home.css">
	<title>ICT30017 - ICT Project A</title>
    <style>
        <?php include "style/home.css" ?>
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
echo '<li><a href="member_profile_list.php">Members</a></li>';
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
<!-- 
<!DOCTYPE html>
<html>
<head>
    <title>User Page</title>
    <style>
        /* CSS for hiding divs based on user role */
        .hidden-from-staff {
            display: none;
        }
    </style>
</head>
<body>

<?php
// Simulating user role, replace with actual logic to get user role
$userRole = '\staff';
?>

<div class="content">
    <div id="memberProfiles" class="visible-to-all">
        <h2>Member Profiles</h2>
        <p>This is the Member Profiles page content.</p>
    </div>

    <div id="facilities" class="visible-to-all">
        <h2>Facilities</h2>
        <p>This is the Facilities page content.</p>
    </div>

    <div id="inventory" class="<?php echo ($userRole === '\admin') ? 'visible-to-all' : 'hidden-from-staff'; ?>">
        <h2>Inventory</h2>
        <p>This is the Inventory page content.</p>
    </div>
</div>

</body>
</html> -->

    <footer><p><em>Copyright 2024</em></p></footer>
</body>
</html>