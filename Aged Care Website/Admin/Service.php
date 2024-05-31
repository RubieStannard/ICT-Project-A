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
    $task = $_POST['task'];
    $staffAssign = $_POST['staffAssign'];
    $address = $_POST['address'];
    $date = $_POST['date'];
  

    // Prepare SQL statement
    $sql = "INSERT INTO admin_service (task, staffAssign, address, date)
    VALUES ('$task', '$staffAssign', '$address', '$date')";

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
<title>Service</title>
<link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
<link rel="stylesheet" href="patient.css">
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
                    <a href="Roster.html" class=""><span class="las la-clipboard-list"></span>
                    <span>Roster</span></a>
                </li>
                <li>
                    <a href="messenger.php"><span class="las la-receipt"></span>
                    <span>Messenger</span></a>
                </li>
                <li>
                    <a href="Service.php" class="active"><span class="las la-bell"></span>
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
            <h2>Services</h2>

            <section >
                <h2>Add New Task</h2>
                <form id="taskForm" action="" method="POST">
                    <label for="task">Task Description:</label>
                    <input type="text" id="task" name="task" required>
        
                    <label for="staffAssigned">Staff Assigned:</label>
                    <input type="text" id="staffAssigned" name="staffAssign" required>

                    <label for="staffAssigned">Workplace Address (Optional):</label>
                    <input type="text" id="staffAssigned" name="address" required>
        
                    <label for="deadline">Deadline:</label>
                    <input type="date" id="deadline" name="date" required>
        
                    <button type="submit">Add Task</button>
                </form>
            </section>
            <table border="1">
                <thead>
                <tr class="item-header">
                    <th>Task</th>
                    <th>Staff Assigned</th>
                    <th>Address</th>
                    <th>date</th>
                    <th>Action</th>
                </tr>
            </thead>
                

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
            // Check if the delete button is clicked
                        if(isset($_POST['delete_id'])) {
                            // Get the ID of the row to be deleted
                            $id_to_delete = $_POST['delete_id'];

                            // Prepare and bind the delete statement
                            $stmt = $conn->prepare("DELETE FROM admin_service WHERE task = ?");
                            $stmt->bind_param("s", $id_to_delete);

                            // Execute the delete statement
                            if ($stmt->execute()) {
                                // Row deleted successfully
                                echo "Row deleted successfully.";
                            } else {
                                // Error occurred
                                echo "Error: " . $conn->error;
                            }

                            // Close prepared statement
                            $stmt->close();
                        }
                        
                        $sql = "SELECT * FROM admin_service"; 
                        $result = $conn->query($sql);
            
                        if ($result->num_rows > 0) {
                         
                            while($row = $result->fetch_assoc()) {
                                echo "<tr class='items'>";
                                echo "<td>" . $row["task"] . "</td>";
                                echo "<td>" . $row["staffAssign"] . "</td>";
                                echo "<td>" . $row["address"] . "</td>";
                                echo "<td>" . $row["date"] . "</td>";
                                echo "<td><form method='post'><input type='hidden' name='delete_id' value='".$row['task']."'><input type='submit' value='Delete'></form></td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        } 
                        else {
                            echo "No records found";
                        }
            
                        $conn->close();
                    ?>
                </tbody>
            </table>
        </main>
    </div>
</body>
</html>