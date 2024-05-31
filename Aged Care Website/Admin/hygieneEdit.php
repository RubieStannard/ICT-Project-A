<!DOCTYPE html >
<html lang="en">
<head>
<meta charset="utf-8">
<title>Inventory Edit</title>
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
                    <a href="Service.php" class=""><span class="las la-bell"></span>
                    <span>Services</span></a>
                </li>
                <li>
                    <a href="Inventory.php" class="active"><span class="las la-receipt"></span>
                    <span>Inventory</span></a>
                    <div class="sub-menu">
                        <a href="" class="sub-item1"><i class="las la-angle-right"></i>Assets</a>
                        <a href="Vendor.php" class="sub-item"><i class="las la-angle-right"></i>Add Vendor</a>
                    </div>
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
                    $supplier = $_POST['supplier'];
                    $phone = $_POST['phone'];
                    $address = $_POST['address'];
                    $item = $_POST['item'];
                    $category = $_POST['category'];
                    $quantity = $_POST['quantity'];
                    $unit_price = $_POST['unit_price'];
                    $total = $_POST['total'];


                 // Update SQL statement
                    $updateSQL = "UPDATE cleaningEdit SET
                    Supplier='$Supplier',
                    phone='$phone',
                    address='$address',
                    ItemName ='$ItemName ',
                    category='$category',
                    Quantity='$Quantity',
                    unit_price='$unit_price',
                    total='$total',
                    WHERE id='$id'";

                if ($conn->query($updateSQL) === TRUE) {
                    echo "Record updated successfully<br>";
                } else {
                    echo "Error updating record: " . $conn->error . "<br>";
                }
            }

             // Get the id from the URL or form submission
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                } elseif (isset($_POST['id'])) {
                    $id = $_POST['id'];
                }
                        // Prepare SQL statement to fetch vendor details
                        $selectSQL = "SELECT * FROM cleaningEdit WHERE id = '$id'";
                        $result = $conn->query($selectSQL);
                        

                        if ($result->num_rows > 0) {
                            // Output data of the row
                            $row = $result->fetch_assoc();
                    ?>


            <a href="Inventory.php"><i class="las la-arrow-circle-left"></i></a>
            <h1>Asset Edit</h1>
            <br>
            <form  method="POST" action="">

                <h3>Item Details</h3>
                    <label for="item-name">Item Name:</label>
                    <input type="text" id="item-name" name="ItemName" value="<?php echo $row['ItemName']; ?>">

                    <label for="item-name">id:</label>
                    <input type="text" id="item-name" name="id" value="<?php echo $row['id']; ?>" readonly>

                    <label for="category">Category:</label>
                    <select id="category" name="category" onchange="showTable()">
                        <option value="">--Please choose an option--</option>
                        <option value="medicine">Medicine</option>
                        <option value="food">Food</option>
                        <option value="medical">Medical Supplies</option>
                        <option value="hygiene">Cleaning Supplies</option>
                        <option value="linen">Linen</option>
                    </select>
    
                    <label for="item-quantity">Quantity:</label>
                    <input type="text" id="item-quantity" name="Quantity" value="<?php echo $row['Quantity'] ?>">
    
                    <label for="unit-price">Unit Price:</label>
                    <input type="number" id="unit-price" name="unit_price" step="0.01" value="<?php echo $row['unit_price']; ?>">
    
                    <label for="total-cost">Total Cost:</label>
                    <input type="number" id="total-cost" name="total" step="0.01" value="<?php echo $row['total']; ?>">
                <br>
                    
                <h3>Supplier Information</h3>
                    <label for="supplier-name">Supplier Name:</label>
                    <input type="text" id="supplier-name" name="Supplier" value="<?php echo $row['Supplier'] ?>">
    
                    <label for="supplier-contact">Contact Number:</label>
                    <input type="tel" id="supplier-contact" name="phone" value="<?php echo $row['phone']; ?>">
    
                    <label for="supplier-address">Address:</label>
                    <input type="text" id="supplier-address" name="address" value="<?php echo $row['address']; ?>">
    
                    <input type="submit" name="update" value="Save Changes">
            </form>
            

            <?php
                } else {
                    echo "No details found for the specified vendor.";
                }

                // Close connection
                $conn->close();
            ?>
        </main>
    </div>
</body>
</html>