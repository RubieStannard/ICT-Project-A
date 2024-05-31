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
    <link rel="stylesheet" href="style/inventory.css">
    <script src="javascript/inventory_add_form.js"></script>
	<title>ICT30017 - ICT Project A</title>
    <style>
        <?php include "style/inventory.css" ?>
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
<form action="inventory_add_4.php" method="POST">
<p><b>Hygiene products</b></p>
        <label for="hitem">Item:</label>
        <input type="text" name="hitem">
        <br><br> <!--Break-->
        <label for="hquan">Quantity:</label>
        <input type="text" name="hquan">
        <br><br> <!--Break-->
        <label for="hsupp">Supplier:</label>
        <input type="text" name="hsupp">
        <br><br> <!--Break-->
    <button type="submit" value="submit">Add inventory</button>
</form>
    <footer><p><em>Copyright 2024</em></p></footer>
</body>
</html>