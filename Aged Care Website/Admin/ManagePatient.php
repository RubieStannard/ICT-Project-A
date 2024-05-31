<!DOCTYPE html >
<html lang="en">
<head>
<meta charset="utf-8">
<title>Manage Patients</title>
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
                        <a href="viewpatient.php" class="sub-item"><i class="las la-angle-right"></i>View patients</a>
                        <a href="" class="sub-item1"><i class="las la-angle-right"></i>Manage Patient</a>
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
        <?php
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

            
    // Check if form is submitted to update patient details
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
        $id = $_POST['id'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $emergency_name = $_POST['emergency_name'];
        $emergency_relationship = $_POST['emergency_relationship'];
        $emergency_address = $_POST['emergency_address'];
        $emergency_phone = $_POST['emergency_phone'];
        $medicalCondition = $_POST['medicalCondition'];
        $bloodType = $_POST['bloodType'];
        $allergies = $_POST['allergies'];
        $surgeryHistory = $_POST['surgeryHistory'];
        $smokeHistory = $_POST['smokeHistory'];
        $alcohol = $_POST['alcohol'];
        $medicare = $_POST['medicare'];
        $privateInsurance = $_POST['privateInsurance'];
        $insuranceNo = $_POST['insuranceNo'];

        // Update SQL statement
        $updateSQL = "UPDATE patients SET
            firstName='$firstName',
            lastName='$lastName',
            address='$address',
            email='$email',
            phone='$phone',
            dob='$dob',
            gender='$gender',
            emergency_name='$emergency_name',
            emergency_relationship='$emergency_relationship',
            emergency_address='$emergency_address',
            emergency_phone='$emergency_phone',
            medicalCondition='$medicalCondition',
            bloodType='$bloodType',
            allergies='$allergies',
            surgeryHistory='$surgeryHistory',
            smokeHistory='$smokeHistory',
            alcohol='$alcohol',
            medicare='$medicare',
            privateInsurance='$privateInsurance',
            insuranceNo='$insuranceNo'
            WHERE id='$id'";

        if ($conn->query($updateSQL) === TRUE) {
            echo "Record updated successfully<br>";
        } else {
            echo "Error updating record: " . $conn->error . "<br>";
        }
    }

    // Check if form is submitted to delete patient details
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
        $id = $_POST['id'];

        // Delete SQL statement
        $deleteSQL = "DELETE FROM patients WHERE id='$id'";

        if ($conn->query($deleteSQL) === TRUE) {
            echo "Record deleted successfully<br>";
            echo '<a href="viewpatient.php">Back to Patient Form</a>';
            $conn->close();
            exit;
        } else {
            echo "Error deleting record: " . $conn->error . "<br>";
        }
    }

    // Get the id from the URL or form submission
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } elseif (isset($_POST['id'])) {
        $id = $_POST['id'];
    }
            // Prepare SQL statement to fetch patient details
            $selectSQL = "SELECT * FROM patients WHERE id = '$id'";
            $result = $conn->query($selectSQL);
            

            if ($result->num_rows > 0) {
                // Output data of the row
                $row = $result->fetch_assoc();
        ?>
            <a href="viewpatient.php"><i class="las la-arrow-circle-left"></i></a>
            <h2>Manage Patient Detials</h2>

            <div class="form-container">
                <form method="POST" action="" >
                    <div class="section">
                        <h3>Personal Information</h3>
                        <div class="input-group">
                            <label for="first-name">Patient ID:</label>
                            <input type="text" id="id" name="id" value="<?php echo $row['id']; ?>" readonly>
                        </div>
                        <div class="input-group">
                            <label for="first-name">First Name:</label>
                            <input type="text" id="first-name" name="firstName" value="<?php echo $row['firstName']; ?>" >
                        </div>
                        <div class="input-group">
                            <label for="last-name">Last Name:</label>
                            <input type="text" id="last-name" name="lastName" value="<?php echo $row['lastName']; ?>" >
                        </div>
                        <div class="input-group">
                            <label for="address">Email:</label>
                            <input type="text" id="address" name="email" value="<?php echo $row['email']; ?>" >
                        </div>
                        <div class="input-group">
                            <label for="address">Address:</label>
                            <input type="text" id="address" name="address" value="<?php echo $row['address']; ?>" >
                        </div>
                        <div class="input-group">
                            <label for="phone-number">Phone Number:</label>
                            <input type="tel" id="phone-number" name="phone" value="<?php echo $row['phone']; ?>" >
                         </div>
                         <div class="input-group">
                            <label for="dob">Date of Birth:</label>
                            <input type="date" id="dob" name="dob" value="<?php echo $row['dob']; ?>" >
                         </div>
                         <div class="input-group">
                                <label>Sex:</label>
                                <label><input type="radio" name="gender" value="f"<?php if($row['gender'] == 'f') echo 'checked'; ?> > Female</label>
                                <label><input type="radio" name="gender" value="m" <?php if($row['gender'] == 'm') echo 'checked'; ?> > Male</label>
                            </div>
                    </div>
        
                    <div class="section">
                        <h3>Emergency Contact</h3>

                        <div class="input-group">
                            <label for="emergency-name">Full Name:</label>
                            <input type="text" id="emergency-name" name="emergency_name" value="<?php echo $row['emergency_name']; ?>" >
                        </div>
                        <div class="input-group">
                            <label for="relationship">Relationship:</label>
                            <input type="text" id="relationship" name="emergency_relationship" value="<?php echo $row['emergency_relationship']; ?>" >
                        </div>
                        <div class="input-group">
                            <label for="address">Address:</label>
                            <input type="text" id="address" name="emergency_address" value="<?php echo $row['emergency_address']; ?>" >
                        </div>
                        <div class="input-group">
                            <label for="emergency-phone">Phone Number:</label>
                            <input type="tel" id="emergency-phone" name="emergency_phone" value="<?php echo $row['emergency_phone']; ?>" >
                        </div>
                    </div>
        
                    <div class="section">
                        <h3>Medical Condition</h3>
                        <div class="input-group">
                            <label for="medical-ailment">Medical Ailment:</label>
                            <input type="text" id="medical-ailment" name="medicalCondition" value="<?php echo $row['medicalCondition']; ?>" >
                        </div>
                        <div class="input-group">
                            <label for="blood-type">Blood Type:</label>
                            <input type="text" id="blood-type" name="bloodType" value="<?php echo $row['bloodType']; ?>" > 
                        </div>
                        <div class="input-group">
                            <label for="allergies">Allergies:</label>
                            <input type="text" id="allergies" name="allergies" value="<?php echo $row['allergies']; ?>" >
                        </div>
                        <div class="input-group">
                            <label for="surgery-history">Surgery History:</label>
                            <input type="text" id="surgery-history" name="surgeryHistory" value="<?php echo $row['surgeryHistory']; ?>" >
                        </div>
                        <div class="input-group">
                            <label for="smoke-history">Smoke History:</label>
                            <input type="text" id="smoke-history" name="smokeHistory" value="<?php echo $row['smokeHistory']; ?>" >
                        </div>
                        <div class="input-group">
                            <label>Alcohol Consumption:</label> 
                            <label><input type="radio" name="alcohol" value="n" <?php if($row['alcohol'] == 'n') echo 'checked'; ?> > Never</label>
                            <label><input type="radio" name="alcohol" value="w" <?php if($row['alcohol'] == 'w') echo 'checked'; ?> > Few times a week</label>
                            <label><input type="radio" name="alcohol" value="m" <?php if($row['alcohol'] == 'm') echo 'checked'; ?> > Few times in a month</label>
                        </div>
                    </div>
        
                    <div class="section">
                        <h3>Healthcare Information</h3>

                        <div class="input-group">
                            <label for="medicare-no">Medicare No:</label>
                            <input type="text" id="medicare-no" name="medicare" value="<?php echo $row['medicare']; ?>" >
                        </div>
                        <div class="input-group">
                            <label for="private-insurance">Private Insurance:</label>
                            <input type="text" id="private-insurance" name="privateInsurance" value="<?php echo $row['privateInsurance']; ?>" >
                        </div>
                        <div class="input-group">
                            <label for="insurance-no">Insurance No:</label>
                            <input type="text" id="insurance-no" name="insuranceNo" value="<?php echo $row['insuranceNo']; ?>">
                        </div>
                    </div>
        
                    <div class="button-group">
                        <input type="submit" name="update" value="Save Changes">
                        <input type="submit" name="delete" value="Delete Profile" onclick="return confirm('Are you sure you want to delete this profile?');">
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