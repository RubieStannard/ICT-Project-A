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
$create = "CREATE TABLE IF NOT EXISTS staff (
    staff_id INT AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(20),
    lname VARCHAR(20),
    gender VARCHAR(1),
    phone1 VARCHAR(20),
    dob VARCHAR(10),
    address1 VARCHAR(20),
    suburb1 VARCHAR(20),
    state1 VARCHAR(3),
    post1 VARCHAR(4),
    dstart VARCHAR(10),
    title VARCHAR(20),
    email VARCHAR(40),
    tfn VARCHAR(10),
    pay VARCHAR(10),
    bank VARCHAR(40),
    account VARCHAR(40),
    bsb VARCHAR(10),
    numb VARCHAR(20),
    sname VARCHAR(40),
    abn VARCHAR(20),
    member VARCHAR(40),
    wname VARCHAR(40),
    relate VARCHAR(40),
    phone2 VARCHAR(20),
    address1 VARCHAR(20),
    suburb1 VARCHAR(20),
    state1 VARCHAR(3),
    post1 VARCHAR(4),
)";

if (mysqli_query($conn, $create)) {
    echo "<p style='color:green'>Successfully created table.</p>";
} else {
    echo "<p style='color:red'>Error creating table.</p>";
}

if (isset($_POST["fname"], $_POST["lname"], $_POST["gender"], $_POST["phone1"], $_POST["dob"], $_POST["address1"], 
$_POST["suburb1"], $_POST["state1"], $_POST["post1"], $_POST["dstart"], $_POST["title"], $_POST["email"], $_POST["tfn"], 
$_POST["pay"], $_POST["bank"], $_POST["account"], $_POST["bsb"], $_POST["numb"], $_POST["sname"], $_POST["abn"], $_POST["member"],
$_POST["wname"], $_POST["relate"], $_POST["phone2"], $_POST["address2"], $_POST["suburb2"], $_POST["state2"], $_POST["post2"])) { 
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $gender = $_POST["gender"];
    $phone1 = $_POST["phone1"];
    $dob = $_POST["dob"];
    $address1 = $_POST["address1"];
    $suburb1 = $_POST["suburb1"];
    $state1 = $_POST["state1"];
    $post1 = $_POST["post1"];
    $dstart = $_POST["dstart"];
    $title = $_POST["title"];
    $email = $_POST["email"];
    $tfn = $_POST["tfn"];
    $pay = $_POST["pay"];
    $bank = $_POST["bank"];
    $account = $_POST["account"];
    $bsb = $_POST["bsb"];
    $numb = $_POST["numb"];
    $sname = $_POST["sname"];
    $abn = $_POST["abn"];
    $member = $_POST["member"];
    $wname = $_POST["wname"];
    $relate = $_POST["relate"];
    $phone2 = $_POST["phone2"];
    $address2 = $_POST["address2"];
    $suburb2 = $_POST["suburb2"];
    $state2 = $_POST["state2"];
    $post2 = $_POST["post2"];
    // Set up SQL string and execute - get data from user, escape it, trust no-one. :)
    $query = "INSERT INTO staff (firstname, lastname, gender, phone1, birth, address1, suburb1, state1, postcode1, startdate, title, 
    email, taxfilenumber, payrate, bank, account, bsb, accnumber, supername, abn, membernumber, fullname, relationship, phone2, 
    address2, suburb2, state2, postcode2) VALUES ('$fname', '$lname', '$gender', '$phone1', '$dob', '$address1', '$suburb1', '$state1', 
    '$post1', '$dstart', '$title', '$email', '$tfn', '$pay', '$bank', '$account', '$bsb', '$numb', '$sname', '$abn', '$member', '$wname', 
    '$relate', '$phone2', '$address2', '$suburb2', '$state2', '$post2')"; // Insert the data
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