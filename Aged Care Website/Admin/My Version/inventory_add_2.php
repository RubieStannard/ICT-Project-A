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
// complete your answer based on Lecture 8 slides 26 and 44
require_once ("settings.php");
$conn = @mysqli_connect($host, $user, $pswd) or die('Failed to connect to server'); // Open the connection - Connect to mysql server
@mysqli_select_db($conn, $dbnm) or die('Database not available'); // Use database
    
// Create the table<!DOCTYPE html>
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
// complete your answer based on Lecture 8 slides 26 and 44
require_once ("settings.php");
$conn = @mysqli_connect($host, $user, $pswd) or die('Failed to connect to server'); // Open the connection - Connect to mysql server
@mysqli_select_db($conn, $dbnm) or die('Database not available'); // Use database
    
// Create the table
$create = "CREATE TABLE IF NOT EXISTS inventory2 (
    invent_id INT AUTO_INCREMENT PRIMARY KEY,
    fitem VARCHAR(40),
    fquan VARCHAR(40),
    fsupp VARCHAR(40)
)";

if (mysqli_query($conn, $create)) {
    echo "<p style='color:green'>Successfully created table.</p>";
} else {
    echo "<p style='color:red'>Error creating table.</p>";
}

if (isset($_POST["fitem"], $_POST["fquan"], $_POST["fsupp"])) { 
    $fitem = $_POST["fitem"];
    $fquan = $_POST["fquan"];
    $fsupp = $_POST["fsupp"];
    // Set up SQL string and execute - get data from user, escape it, trust no-one. :)
    $query = "INSERT INTO inventory (item, quantity, supplier) VALUES ('$fitem', '$fquan', '$fsupp')"; // Insert the data
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
$create = "CREATE TABLE IF NOT EXISTS inventory (
    member_id INT AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(40),
    lname VARCHAR(40),
    gender VARCHAR(1),
    email VARCHAR(40),
    phone VARCHAR(20)
)";

if (mysqli_query($conn, $create)) {
    echo "<p style='color:green'>Successfully created table.</p>";
} else {
    echo "<p style='color:red'>Error creating table.</p>";
}

if (isset($_POST["fname"], $_POST["lname"], $_POST["gender"], $_POST["email"], $_POST["phone"])) { 
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    // Set up SQL string and execute - get data from user, escape it, trust no-one. :)
    $query = "INSERT INTO vipmembers (firstname, lastname, gender, email, phone) VALUES ('$fname', '$lname', '$gender', '$email', '$phone')"; // Insert the data
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