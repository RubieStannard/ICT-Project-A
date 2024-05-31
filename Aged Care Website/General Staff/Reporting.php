<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $servername = "localhost";
    $username = "root"; // replace with your database username
    $password = ""; // replace with your database password
    $dbname = "admin"; // replace with your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Capture form data
    $id = $_POST['id'];
    $reportType = $_POST['reportType'];
    $description = $_POST['description'];
   
  

    // Prepare SQL statement
    $sql = "INSERT INTO report (id, reportType, description)
    VALUES ('$id', '$reportType', '$description')";

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>



<!DOCTYPE html >
<html lang="en">
<head>
<meta charset="utf-8">
<title>Reporting</title>
<link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
<link rel="stylesheet" href="management.css">
</head>
<body>
    <div class="app">
        
        <div class="sidebar">
            <div class="sidebar-brand">
                <h2><span class="las la-clinic-medical"></span> <span>Swin Aged Care</span></h2>
            </div>

            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href="Patientmanagement.php"><span class="las la-igloo"></span>
                        <span>Patient Management</span></a>
                    </li>
                    <li>
                        <a href="StaffRoster.php"><span class="lab la-accessible-icon dropdown"></span>
                        <span>Roster</span></a>
                    </li>
                    <li>
                        <a href="Tasks.php"><span class="las la-bell"></span>
                        <span>Task Management</span></a>
                    </li>
                    <li>
                        <a href="messenger.php"><span class="las la-receipt"></span>
                        <span>Messenger</span></a>
                    </li>
                    <li>
                        <a href="Reporting.php" class="active"><span class="las la-users"></span>
                        <span>Reporting</span></a>
                    </li>
                    <li>
                        <a href="Resource.html"><span class="las la-receipt"></span>
                        <span>Resource Center</span></a>
                    </li>
                    <li>
                        <a href="account.php"><span class="las la-user-circle"></span>
                        <span>Accounts</span></a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="main-content">
            <header>
                
                    <h2>
                        <label for="nav-toggle">
                            <span class="las la-bars"></span>
                            Dashboard
                        </label>
                    </h2>

                    <div class="search-wrapper">
                        <span class="las la-search"></span>
                        <input type="search" placeholder="Search here">
                    </div>

                    <div class="user-wrapper">
                        <img src="Profile.png" width="40px" height="40px" alt="">
                        <div>
                            <h4>John Doe</h4>
                            <small>General staff</small>
                        </div>
                    </div>
                

            </header>

            <main>
                <section>
                    <h2>Submit a New Report</h2>
                    <form action="" method="POST" id="reportForm">
                    <label for="name">Staff ID:</label>
                        <input type="text" id="id" name="id" required>

                        <label for="reportType">Report Type:</label>
                        <select id="reportType" name="reportType" required>
                            <option value="">--Please choose an option--</option>
                            <option value="incident">Incident</option>
                            <option value="feedback">Feedback</option>
                            <option value="suggestion">Suggestion</option>
                        </select>
            
                        <label for="description">Description:</label>
                        <textarea id="description" name="description" rows="4" required></textarea>
            
                        <button type="submit">Submit Report</button>
                    </form>
                </section>

            
            </main>
        </div>
    </div>
</body>
</html>