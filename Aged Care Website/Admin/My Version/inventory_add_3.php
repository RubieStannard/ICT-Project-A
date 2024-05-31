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
    
// Create the table
$create = "CREATE TABLE IF NOT EXISTS inventory3 (
    invent_id INT AUTO_INCREMENT PRIMARY KEY,
    msitem VARCHAR(40),
    msquan VARCHAR(40),
    mssupp VARCHAR(40)
)";

if (mysqli_query($conn, $create)) {
    echo "<p style='color:green'>Successfully created table.</p>";
} else {
    echo "<p style='color:red'>Error creating table.</p>";
}

if (isset($_POST["msitem"], $_POST["msquan"], $_POST["mssupp"])) { 
    $msitem = $_POST["msitem"];
    $msquan = $_POST["msquan"];
    $mssupp = $_POST["mssupp"];
    // Set up SQL string and execute - get data from user, escape it, trust no-one. :)
    $query = "INSERT INTO inventory (item, quantity, supplier) VALUES ('$msitem', '$msquan', '$mssupp')"; // Insert the data
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