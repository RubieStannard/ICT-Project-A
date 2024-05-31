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

    // Capture form data and sanitize
    $title = htmlspecialchars($_POST['title']);
    $staff = htmlspecialchars($_POST['staff']);
    $start = $_POST['start'];
    $end = $_POST['end'];
    $description = htmlspecialchars($_POST['description']);
    $shift_date = '2024-05-02'; // Replace this with actual logic to get the date

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO shifts (title, staff, start, end, description, shift_date) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $title, $staff, $start, $end, $description, $shift_date);

    // Execute SQL statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>



<!DOCTYPE html >
<html lang="en">
<head>
<meta charset="utf-8">
<title>Add Shift</title>
<link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
<link rel="stylesheet" href="roster.css">
</head>
<body>
    
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="las la-clinic-medical"></span> <span>Swin Aged Care</span></h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="homepage.php" class=""><span class="las la-igloo"></span>
                    <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="patient_form.php" class=""><span class="lab la-accessible-icon"></span>
                    <span>Patients</span></a>
                </li>
                <li>
                    <a href="addEmployee.html"><span class="las la-users"></span>
                    <span>Employees</span></a>
                </li>
                <li>
                    <a href="Roster.html" class="active"><span class="las la-clipboard-list"></span>
                    <span>Roster</span></a>
                </li>
                <li>
                    <a href="messenger.php"><span class="las la-receipt"></span>
                    <span>Messenger</span></a>
                </li>
                <li>
                    <a href="Service.php"><span class="las la-bell"></span>
                    <span>Services</span></a>
                </li>
                <li>
                    <a href="Inventory.php"><span class="las la-receipt"></span>
                    <span>Inventory</span></a>
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
                    <small>Super admin</small>
                </div>
            </div>
        </header>

        <main>
            <a href="Roster.php"><i class="las la-arrow-circle-left"></i></a>
            <h2>Add Shift</h2>

            <form action="" method="POST">
            <div class="form-row">
                <label for="shiftName">Shift Title:</label>
                <input type="text" id="shiftName" name="title" required>
            </div>
            <div class="form-row">
                <label for="staffAssign">Staff Assign:</label>
                <input type="text" id="staffAssign" name="staff" required>
            </div>
            <div class="form-row">
                <label for="startTime">Start Time:</label>
                <input type="time" id="startTime" name="start" required>
            </div>
            <div class="form-row">
                <label for="endTime">End Time:</label>
                <input type="time" id="endTime" name="end" required>
            </div>
            <div class="form-row">
                <label for="description">Description:</label>
                <textarea id="description" name="description"></textarea>
            </div>
            <button type="submit">Submit Shift</button>
        </form>
        </main>
    </div>
</body>
</html>