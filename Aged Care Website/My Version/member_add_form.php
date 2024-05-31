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
    <link rel="stylesheet" href="style/add.css">
    <script src="javascript/member_add_form.js"></script>
	<title>ICT30017 - ICT Project A</title>
    <style>
        <?php include "style/add.css" ?>
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
<form action="member_add.php" method="POST">
    <p><b>General Information</b></p>
        <label for="fname">First name:</label>
        <input type="text" name="fname">
        <br><br> <!--Break-->
        <label for="lname">Last name:</label>
        <input type="text" name="lname">
        <br><br> <!--Break-->
        <label for="gender">Gender:</label>
        <input type="text" name="gender" maxlength="1">
        <br><br> <!--Break-->
        <label for="phone1">Phone number:</label>
        <input type="text" name="phone1">
        <br><br> <!--Break-->
        <label for="dob">Date of birth:</label>
        <input type="text" name="dob">
        <br><br> <!--Break-->
        <label for="address1">Address:</label>
        <input type="text" name="address1">
        <br><br> <!--Break-->
        <label for="suburb1">Suburb:</label>
        <input type="text" name="suburb1">
        <br><br> <!--Break-->
        <label for="state1">State:</label>
        <input type="text" name="state1" maxlength="3">
        <br><br> <!--Break-->
        <label for="post1">Postcode:</label>
        <input type="text" name="post1" maxlength="4">
        <br><br> <!--Break-->
    <p><b>Medical Information</b></p>
        <label for="heart">Resting heart rate (bpm):</label>
        <input type="text" name="heart" maxlength="3">
        <br><br> <!--Break-->
        <label for="blood">Blood pressure (mmHg):</label>
        <input type="text" name="blood">
        <br><br> <!--Break-->
        <label for="history">Medical history:</label>
        <input type="text" name="history">
        <br><br> <!--Break-->
        <label for="injury">Recent injuries:</label>
        <input type="text" name="injury">
        <br><br> <!--Break-->
        <label for="allergy">Allergies:</label>
        <input type="text" name="allergy">
        <br><br> <!--Break-->
        <label for="medic">Medication:</label>
        <input type="text" name="medic">
        <br><br> <!--Break-->
        <label for="condition">Medical conditions:</label>
        <input type="text" name="condition">
        <br><br> <!--Break-->
        <label for="smoke">Do you smoke?</label>
        <input type="text" name="smoke" maxlength="3">
        <br><br> <!--Break-->
        <label for="drink">Do you drink alcohol?</label>
        <input type="text" name="drink" maxlength="3">
        <br><br> <!--Break-->
        <label for="coffee">Do you drink/use any caffeine products?</label>
        <input type="text" name="coffee" maxlength="3">
        <br><br> <!--Break-->
    <p><b>Healthcare Information</b></p>
        <label for="iname">Insurer name:</label>
        <input type="text" name="iname">
        <br><br> <!--Break-->
        <label for="numb">Insurance number:</label>
        <input type="text" name="numb">
        <br><br> <!--Break-->
        <label for="car">Medicare card number:</label>
        <input type="text" name="car">
        <br><br> <!--Break-->
    <p><b>Emergency Contact</b></p>
        <label for="wname">Full name:</label>
        <input type="text" name="wname">
        <br><br> <!--Break-->
        <label for="relate">Relationship:</label>
        <input type="text" name="relate">
        <br><br> <!--Break-->
        <label for="phone2">Phone number:</label>
        <input type="text" name="phone2">
        <br><br> <!--Break-->
        <label for="address2">Address:</label>
        <input type="text" name="address2">
        <br><br> <!--Break-->
        <label for="suburb2">Suburb:</label>
        <input type="text" name="suburb2">
        <br><br> <!--Break-->
        <label for="state2">State:</label>
        <input type="text" name="state2" maxlength="3">
        <br><br> <!--Break-->
        <label for="post2">Postcode:</label>
        <input type="text" name="post2" maxlength="4">
        <br><br> <!--Break-->
    <button type="submit" value="submit">Add member</button>
</form>
    <footer><p><em>Copyright 2024</em></p></footer>
</body>
</html>