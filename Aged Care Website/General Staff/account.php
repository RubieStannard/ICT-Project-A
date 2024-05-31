<!DOCTYPE html >
<html lang="en">
<head>
<meta charset="utf-8">
<title>Account</title>
<link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
<link rel="stylesheet" href="account.css">
</head>
<body>
    
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="las la-clinic-medical"></span> <span>Swin Aged Care</span></h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="Patientmanagement.php" ><span class="las la-igloo"></span>
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
                    <a href="account.php" class="active"><span class="las la-user-circle"></span>
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
                    <h4>Nicholas Tan</h4>
                    <small>General staff</small>
                </div>
            </div>
        </header>

        <main>
        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $database = "admin";
            
                       
                        $conn = new mysqli('localhost','root','','admin');
            
                       
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        
                        
                        $sql = "SELECT * FROM staffaccount"; 
                        $result = $conn->query($sql);


                        if ($result->num_rows > 0) {
                            // Output data of the row
                            $row = $result->fetch_assoc();

                        ?>

            <h2>Account</h2>

            <div class="form-container">
                <form action="" method="POST" >
                    <!-- Personal Information Section -->
                    <div class="section">
                        <h3>Personal Information</h3>
                        <div class="input-group">
                            <label for="first-name">Employee ID:</label>
                            <input type="text" id="id" name="id" value="<?php echo $row['id']; ?>" readonly>
                        </div>
                        <div class="input-group">
                            <label for="first-name">First Name:</label>
                            <input type="text" id="first-name" name="firstName" value="<?php echo $row['firstName']; ?>" readonly>
                        </div>
                        <div class="input-group">
                            <label for="last-name">Last Name:</label>
                            <input type="text" id="last-name" name="lastName" value="<?php echo $row['lastName']; ?>" readonly>
                        </div>
                        <div class="input-group">
                            <label for="phone">Phone Number:</label>
                            <input type="tel" id="phone" name="phone" value="<?php echo $row['phone']; ?>" readonly>
                        </div>
                        <div class="input-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" readonly>
                        </div>
                        <div class="input-group">
                            <label for="email">Address:</label>
                            <input type="text" id="email" name="address" value="<?php echo $row['address']; ?>" readonly>
                        </div>
                        <div class="input-group">
                            <label for="dob">Date of Birth:</label>
                        <input type="date" id="dob" name="dob" value="<?php echo $row['dob']; ?>" readonly>
                        </div>
                    </div>
        
                    <!-- Emergency Contact Section -->
                    <div class="section">
                        <h3>Emergency Contact</h3>
                        <div class="input-group">
                            <label for="emergency-name">Full Name:</label>
                            <input type="text" id="emergency-name" name="emergency_name" value="<?php echo $row['emergency_name']; ?>" readonly>
                        </div>
                        <div class="input-group">
                            <label for="relationship">Relationship:</label>
                            <input type="text" id="relationship" name="emergency_relationship" value="<?php echo $row['emergency_relationship']; ?>" readonly>
                        </div>
                        <div class="input-group">
                            <label for="email">Address:</label>
                            <input type="text" id="email" name="emergency_address" value="<?php echo $row['emergency_address']; ?>" readonly>
                        </div>
                        <div class="input-group">
                            <label for="emergency-phone">Phone Number:</label>
                            <input type="tel" id="emergency-phone" name="emergency_phone" value="<?php echo $row['emergency_phone']; ?>" readonly>
                        </div>
                    </div>
        
                    <!-- Banking Details Section -->
                    <div class="section">
                        <h3>Banking Details</h3>
                        <div class="input-group">
                            <label for="bank-name">Bank:</label>
                            <input type="text" id="bank-name" name="bank" value="<?php echo $row['bank']; ?>" readonly>
                        </div>
                        <div class="input-group">
                            <label for="full-name">Full Name:</label>
                        <input type="text" id="name" name="fullName" value="<?php echo $row['fullName']; ?>" readonly>
                        </div>
                        <div class="input-group">
                            <label for="bsb">BSB:</label>
                            <input type="text" id="bsb" name="bsb" value="<?php echo $row['bsb']; ?>" readonly>
                        </div>
                        <div class="input-group">
                            <label for="account-number">Account Number:</label>
                            <input type="text" id="account-number" name="accountNo" value="<?php echo $row['accountNo']; ?>" readonly>
                        </div>
                    </div>

                    <div class="section">
                        <h3>Superannuation Information</h3>
                        <div class="input-group">
                        <label for="provider">Superannuation Provider:</label>
                        <input type="text" id="provider" name="super" value="<?php echo $row['super']; ?>" readonly>
                        </div>
                        <div class="input-group">
                            <label for="member-id">Member ID:</label>
                            <input type="text" id="member-id" name="memberID" value="<?php echo $row['memberID']; ?>" readonly>
                        </div>
                        <div class="input-group">
                            <label for="tax">Tax Number:</label>
                        <input type="text" id="tax" name="tax" value="<?php echo $row['tax']; ?>" readonly>
                        </div>
                    
                    </div>
                    
                </form>
            </div>
           
            <?php
                } else {
                    echo "No details found for the specified patient.";
                }

                // Close connection
                $conn->close();
            ?>
           

           
        </main>
    </div>
</body>
</html>