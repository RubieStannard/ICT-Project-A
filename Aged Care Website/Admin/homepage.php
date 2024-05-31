<!DOCTYPE html >
<html lang="en">
<head>
<meta charset="utf-8">
<title>Account Admin</title>
<link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
<link rel="stylesheet" href="admin.css">
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
                        <a href="" class="active"><span class="las la-igloo"></span>
                        <span>Dashboard</span></a>
                    </li>
                    <li>
                        <a href="patient_form.php"><span class="lab la-accessible-icon dropdown"></span>
                        <span>Patients</span></a>
                    </li>
                    <li>
                        <a href="addEmployee.html"><span class="las la-users"></span>
                        <span>Employees</span></a>
                    </li>
                    <li>
                        <a href="Roster.html"><span class="las la-clipboard-list"></span>
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
                <div class="cards">
                    <div class="card-single">
                        <div>
                            <h1>33</h1>
                            <span>Employees</span>
                        </div>
                        <div>
                            <span class="las la-users"></span>
                        </div>
                    </div>
                    <div class="card-single">
                        <div>
                            <h1>54</h1>
                            <span>Appointments</span>
                        </div>
                        <div>
                            <span class="las la-clipboard"></span>
                        </div>
                    </div>
                    
                </div>

                <section id="patientUpdates">
                    <h2>Patient Updates</h2>
                    <table>
                        <thead>
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
                    
                    </table>
                </section>
                
                <section id="reports">
                    <h2>Employee Reports</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Employee ID</th>
                                <th>Type</th>
                                <th>Description</th>
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
            
                        
                        $sql = "SELECT * FROM report"; 
                        $result = $conn->query($sql);
            
                        if ($result->num_rows > 0) {
                         
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["id"] . "</td>";
                                echo "<td>" . $row["reportType"] . "</td>";
                                echo "<td>" . $row["description"] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='4'>No records found</td></tr>";
                        }
            
                        $conn->close();
                    ?>
                        </tbody>
                    </table>
                </section>

            
            </main>
        </div>
    </div>
</body>
</html>