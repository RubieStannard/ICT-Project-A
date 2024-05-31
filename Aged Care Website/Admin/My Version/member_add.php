<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="ICT Project A Website" />
	<meta name="keywords" content="HTML, CSS, JavaScript, PHP" />
	<meta name="author" content="Group 2" />
	<title>ICT30017 - ICT Project A</title>
</head>
<body>
<?php
require_once ("settings.php");
$conn = @mysqli_connect($host, $user, $pswd) or die('Failed to connect to server'); // Open the connection - Connect to mysql server
@mysqli_select_db($conn, $dbnm) or die('Database not available'); // Use database
    
// Create the table
$create = "CREATE TABLE IF NOT EXISTS members (
    member_id INT AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(20),
    lname VARCHAR(20),
    gender VARCHAR(1),
    phone1 VARCHAR(20),
    dob VARCHAR(10),
    address1 VARCHAR(20),
    suburb1 VARCHAR(20),
    state1 VARCHAR(3),
    post1 VARCHAR(4),
    heart VARCHAR(3),
    blood VARCHAR(10),
    history VARCHAR(40),
    injury VARCHAR(40),
    allergy VARCHAR(40),
    medic VARCHAR(40),
    condition VARCHAR(40),
    smoke VARCHAR(3),
    drink VARCHAR(3),
    coffee VARCHAR(3),
    iname VARCHAR(40),
    numb VARCHAR(40),
    car VARCHAR(40),
    wname VARCHAR(40),
    relate VARCHAR(40),
    phone2 VARCHAR(20),
    address2 VARCHAR(20),
    suburb2 VARCHAR(20),
    state2 VARCHAR(3),
    post2 VARCHAR(4),
)";

if (mysqli_query($conn, $create)) {
    echo "<p style='color:green'>Successfully created table.</p>";
} else {
    echo "<p style='color:red'>Error creating table.</p>";
}

if (isset($_POST["fname"], $_POST["lname"], $_POST["gender"], $_POST["phone1"], $_POST["dob"], $_POST["address1"], 
$_POST["suburb1"], $_POST["state1"], $_POST["post1"], $_POST["heart"], $_POST["blood"], $_POST["history"], 
$_POST["injury"], $_POST["allergy"], $_POST["medic"], $_POST["condition"], $_POST["smoke"], $_POST["drink"], 
$_POST["coffee"], $_POST["iname"], $_POST["numb"], $_POST["car"], $_POST["wname"], $_POST["relate"],
$_POST["phone2"], $_POST["address2"], $_POST["suburb2"], $_POST["state2"], $_POST["post2"])) { 
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $gender = $_POST["gender"];
    $phone1 = $_POST["phone1"];
    $dob = $_POST["dob"];
    $address1 = $_POST["address1"];
    $suburb1 = $_POST["suburb1"];
    $state1 = $_POST["state1"];
    $post1 = $_POST["post1"];
    $heart = $_POST["heart"];
    $blood = $_POST["blood"];
    $history = $_POST["history"];
    $injury = $_POST["injury"];
    $allergy = $_POST["allergy"];
    $medic = $_POST["medic"];
    $condition = $_POST["condition"];
    $smoke = $_POST["smoke"];
    $drink = $_POST["drink"];
    $coffee = $_POST["coffee"];
    $iname = $_POST["iname"];
    $numb = $_POST["numb"];
    $car = $_POST["car"];
    $wname = $_POST["wname"];
    $relate = $_POST["relate"];
    $phone2 = $_POST["phone2"];
    $address2 = $_POST["address2"];
    $suburb2 = $_POST["suburb2"];
    $state2 = $_POST["state2"];
    $post2 = $_POST["post2"];
    // Set up SQL string and execute - get data from user, escape it, trust no-one. :)
    $query = "INSERT INTO members (firstname, lastname, gender, phone, birth, address1, suburb, state1, postcode, heartrate, bloodpressure, history, 
    injury, allergies, medication, condition, smoke, drink, coffee, insurername, insurancenumber, cardnumber, fullname, relationship, ecphone, 
    ecaddress, ecsuburb, ecstate, ecpostcode) VALUES ('$fname', '$lname', '$gender', '$phone1', '$dob', '$address1',
    '$suburb1', '$state1', '$post1', '$heart', '$blood', '$history', '$injury', '$allergy', '$medic', '$condition', '$smoke', '$drink', '$coffee', 
    '$iname', '$numb', '$car', '$wname', '$relate', '$phone2', '$address2', '$suburb2', '$state2', '$post2')"; // Insert the data
    $results = mysqli_query($conn, $query);
    if (!$results) {
        echo "<p style='color:red'>Error creating table: " . mysqli_error($conn) . "</p>";
    } else {
        echo "<p style='color: green;'>Successfully created table.</p>";
    }
}
// Close the connection
// mysqli_free_result($results);
mysqli_close($conn);
?>
</body>
</html>