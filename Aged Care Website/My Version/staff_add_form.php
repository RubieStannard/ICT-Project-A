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
	<link rel="stylesheet" href="style/add.css" type="text/css" />
    <script src="javascript/staff_add_form.js"></script>
	<title>ICT30017 - ICT Project A</title>
    <style>
        <?php include "style/add.css" ?>
    </style>
</head>
<body>
<form action="staff_add.php" method="POST">
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
        <label for="dstart">Start date:</label>
        <input type="text" name="dstart">
        <br><br> <!--Break-->
        <label for="title">Position title:</label>
        <input type="text" name="title">
        <br><br> <!--Break-->
        <label for="email">Email address:</label>
        <input type="text" name="email">
        <br><br> <!--Break-->
        <label for="tfn">Tax file number:</label>
        <input type="text" name="tfn">
        <br><br> <!--Break-->
        <label for="pay">Hourly pay rate:</label>
        <input type="text" name="pay">
        <br><br> <!--Break-->
    <p><b>Bank Details</b></p>
        <label for="bank">Bank name:</label>
        <input type="text" name="bank">
        <br><br> <!--Break-->
        <label for="account">Account name:</label>
        <input type="text" name="account">
        <br><br> <!--Break-->
        <label for="bsb">BSB:</label>
        <input type="text" name="bsb">
        <br><br> <!--Break-->
        <label for="numb">Account number:</label>
        <input type="text" name="numb">
        <br><br> <!--Break-->
    <p><b>Superannuation Details</b></p>
        <label for="sname">Super fund name:</label>
        <input type="text" name="sname">
        <br><br> <!--Break-->
        <label for="abn">ABN:</label>
        <input type="text" name="abn">
        <br><br> <!--Break-->
        <label for="member">Membership number:</label>
        <input type="text" name="member">
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
    <button type="submit" value="submit">Add staff</button>
</form>
    <footer><p><em>Copyright 2024</em></p></footer>
</body>
</html>