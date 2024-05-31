<!DOCTYPE html >
<html lang="en">
<head>
<meta charset="utf-8">
<title>View Patients</title>
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
                    <a href="patient_form.php" class="active"><span class="lab la-accessible-icon"></span>
                    <span>Patients</span></a>
                    <div class="sub-menu">
                        <a href="patient_form.php" class="sub-item"><i class="las la-angle-right"></i>Register patient</a>
                        <a href="viewpatient.php" class="sub-item1"><i class="las la-angle-right"></i>View patients</a>
                        <a href="ManagePatient.php" class="sub-item"><i class="las la-angle-right"></i>Manage Patient</a>
                    </div>
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
            <h2>Patient Detials</h2>

            <br>
            <table border="1">
                <thead>
                <tr class="item-header">
                    <th>Patient Name</th>
                    <th>Patient ID</th>
                    <th>Email</th>
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
            
                        
                        $sql = "SELECT * FROM patients"; 
                        $result = $conn->query($sql);
            
                        if ($result->num_rows > 0) {
                         
                            while($row = $result->fetch_assoc()) {
                                echo "<tr class='items'>";
                                echo "<td>" . $row["firstName"] . "</td>";
                                echo "<td>" . $row["id"] . "</td>";
                                echo "<td>" . $row["email"] . "</td>";
                                echo "<td><a href='ManagePatient.php?id=" . $row["id"] . "'><button>View</button></a></td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='4'>No records found</td></tr>";
                        }
            
                        $conn->close();
                    ?>
                </tbody>
            </table>

           
        </main>
    </div>
</body>
</html>