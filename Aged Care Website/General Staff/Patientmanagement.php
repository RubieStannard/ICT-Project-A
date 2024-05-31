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
    $staffID = $_POST['staffID'];
    $patientID = $_POST['patientID'];
    $age = $_POST['age'];
    $room = $_POST['room'];
    $con = $_POST['con'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $note = $_POST['note'];
  

    // Prepare SQL statement
    $sql = "INSERT INTO updatepatient (staffID, patientID, age, room, con, date, time, note)
    VALUES ('$staffID', '$patientID', '$age', '$room', '$con', '$date', '$time', '$note')";

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
<title>Account Admin</title>
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
                        <a href="Patientmanagement.php" class="active"><span class="las la-igloo"></span>
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
                        <a href="Reporting.php"><span class="las la-users"></span>
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
                            <small>Super admin</small>
                        </div>
                    </div>
                

            </header>

            <main>
                <section>
                    <h2>Update Patient Information</h2>
                    <form action="" method="POST"  id="patientForm" >
                        <label for="name">Staff ID:</label>
                        <input type="text" id="name" name="staffID" required>
                        
                        <label for="patientID">Patient ID:</label>
                        <input type="text" id="patientID" name="patientID" required>
            
                        <label for="age">Age:</label>
                        <input type="number" id="age" name="age" required>
            
                        <label for="room">Room Number:</label>
                        <input type="text" id="room" name="room" required>

                        <label for="room">Condition:</label>
                        <input type="text" id="room" name="con" required>

                        <label for="room">Date:</label>
                        <input type="date" id="room" name="date" required>

                        <label for="room">Time:</label>
                        <input type="time" id="room" name="time" required>

                        <label for="room">Emergency Note:</label>
                        <input type="text" id="room" name="note" required>
            
                        <button type="submit">Update Patient</button>
                    </form>
                </section>
                <section>
                    <h2>Patient Records</h2>
                    <table>
                        <tr>
                            <th>Staff ID</th>
                            <th>Patient ID</th>
                            <th>Age</th>
                            <th>Room</th>
                            <th>Condition</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Note</th>

                        </tr>
                        <tbody>
                    <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $database = "admin";
            
                       
                        $conn = new mysqli('localhost','root','','admin');
            
                       
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
            
                        
                        $sql = "SELECT * FROM updatepatient"; 
                        $result = $conn->query($sql);
            
                        if ($result->num_rows > 0) {
                         
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["staffID"] . "</td>";
                                echo "<td>" . $row["patientID"] . "</td>";
                                echo "<td>" . $row["age"] . "</td>";
                                echo "<td>" . $row["room"] . "</td>";
                                echo "<td>" . $row["con"] . "</td>";
                                echo "<td>" . $row["date"] . "</td>";
                                echo "<td>" . $row["time"] . "</td>";
                                echo "<td>" . $row["note"] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='4'>No records found</td></tr>";
                        }
            
                        $conn->close();
                    ?>
                </tbody>
                </section>

            
            </main>
        </div>
    </div>
</body>
</html>