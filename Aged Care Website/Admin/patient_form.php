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

    // Prepare SQL statement
    $sql = "INSERT INTO patients (firstName, lastName, address, email, phone, dob, gender, emergency_name, emergency_relationship, emergency_address, emergency_phone, medicalCondition, bloodType, allergies, surgeryHistory, smokeHistory, alcohol, medicare, privateInsurance, insuranceNo)
    VALUES ('$firstName', '$lastName', '$address', '$email', '$phone', '$dob', '$gender', '$emergency_name', '$emergency_relationship', '$emergency_address', '$emergency_phone', '$medicalCondition', '$bloodType', '$allergies', '$surgeryHistory', '$smokeHistory', '$alcohol', '$medicare', '$privateInsurance', '$insuranceNo')";

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
<title>Add Patient</title>
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
                        <a href="patient_form.php" class="sub-item1"><i class="las la-angle-right"></i>Register patient</a>
                        <a href="viewpatient.php" class="sub-item"><i class="las la-angle-right"></i>View patients</a>
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
            <h2>Add Patient Detials</h2>
            
            <div class="form-container">
                <form action="" method="POST">
                    <fieldset>
                        <legend>Personal Information</legend>
                        <label>First Name:</label>
                        <input type="text" id="first-name" name="firstName">
                
                        <label>Last Name:</label>
                        <input type="text" id="last-name" name="lastName">
                
                        <label>Address:</label>
                        <input type="text" id="address" name="address">
                
                        <label>Email:</label>
                        <input type="text" id="email" name="email">
                
                        <label>Phone Number:</label>
                        <input type="text" id="phone" name="phone">
                
                        <label>Date of Birth:</label>
                        <input type="date" id="dob" name="dob">
                        
                        <div class="input-group">
                            <label>Sex:</label>
                            <label><input type="radio" name="gender" value="f"> Female</label>
                            <label><input type="radio" name="gender" value="m"> Male</label>
                        </div>
                    </fieldset>
                
                    <br>
                    <fieldset>
                        <legend>Emergency Contact</legend>
                        <label>Full Name:</label>
                        <input type="text" id="emergency-name" name="emergency_name">
                
                        <label>Relationship:</label>
                        <input type="text" id="relationship" name="emergency_relationship">
                        
                        <label>Address:</label>
                        <input type="text" id="emergency-address" name="emergency_address">
                        
                        <label>Phone Number:</label>
                        <input type="text" id="emergency-phone" name="emergency_phone">
                    </fieldset>
                
                    <br>
                    <fieldset>
                        <legend>Medical Condition</legend>
                        <label>Medical Ailment:</label>
                        <input type="text" id="medical-ailment" name="medicalCondition">
                
                        <label>Blood Type:</label>
                        <input type="text" id="blood-type" name="bloodType">
                
                        <label>Allergies:</label>
                        <input type="text" id="allergies" name="allergies">
                
                        <label>Surgery History:</label>
                        <input type="text" id="surgery-history" name="surgeryHistory">
                
                        <label>Smoke History:</label>
                        <input type="text" id="smoke-history" name="smokeHistory">
                
                        <div class="input-group">
                            <label>Alcohol Consumption:</label> 
                            <label><input type="radio" name="alcohol" value="N"> Never</label>
                            <label><input type="radio" name="alcohol" value="w"> Few times a week</label>
                            <label><input type="radio" name="alcohol" value="m"> Few times in a month</label>
                        </div>
                    </fieldset>
                
                    <br>
                    <fieldset>
                        <legend>Healthcare Information</legend>
                        <label>Medicare No:</label>
                        <input type="text" id="medicare-no" name="medicare">
                
                        <label>Private Insurance:</label>
                        <input type="text" id="private-insurance" name="privateInsurance">
                
                        <label>Insurance No:</label>
                        <input type="text" id="insurance-no" name="insuranceNo">
                    </fieldset>
                
                    <br>
                    <button type="submit">Submit</button>
                </form>
            </div>
           

           
        </main>
    </div>
</body>
</html>
