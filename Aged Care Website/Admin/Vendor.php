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
    $supplier = $_POST['Supplier'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $ItemName = $_POST['ItemName'];
    $category = $_POST['category'];
    $Quantity = $_POST['Quantity'];
    $unit_price = $_POST['unit_price'];
    $total = $_POST['total'];
  

    // Prepare SQL statement
    $sql = "INSERT INTO medicine (Supplier, phone, address, ItemName, category, Quantity, unit_price, total)
    VALUES ('$Supplier', '$phone', '$address', '$ItemName', '$category', '$Quantity', '$unit_price', '$total')";

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
<title>Add Vendor</title>
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
                    <a href="patient.php" class=""><span class="lab la-accessible-icon"></span>
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
                    <a href="Inventory.php" class="active"><span class="las la-receipt"></span>
                    <span>Inventory</span></a>
                    <div class="sub-menu">
                        <a href="Inventory.php" class="sub-item"><i class="las la-angle-right"></i>Assets</a>
                        <a href="" class="sub-item1"><i class="las la-angle-right"></i>Add Vendor</a>
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
            <h2>Add Vendor</h2>

            <br>
            <form action="" method="POST">
                <!-- Supplier Information Section -->
                <fieldset>
                    <legend>Supplier Information</legend>
                    <label for="Supplier-name">Supplier Name:</label>
                    <input type="text" id="Supplier-name" name="Supplier" required>
    
                    <label for="Supplier-contact">Contact Number:</label>
                    <input type="tel" id="supplier-contact" name="phone" required>
    
                    <label for="supplier-address">Address:</label>
                    <input type="text" id="supplier-address" name="address" required>
                </fieldset>
                <br>
    
                <!-- Item Details Section -->
                <fieldset>
                    <legend>Item Details</legend>
                    <label for="item-name">Item Name:</label>
                    <input type="text" id="item-name" name="ItemName" required>

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
                    <input type="number" id="item-quantity" name="Quantity" required oninput="calculateTotalCost()">

                    <label for="unit-price">Unit Price:</label>
                    <input type="number" id="unit-price" name="unit_price" step="0.01" required oninput="calculateTotalCost()">

                    <label for="total-cost">Total Cost:</label>
                    <input type="number" id="total-cost" name="total" step="0.01" required readonly>
                </fieldset>

                <script>
                    function calculateTotalCost() {
                        var quantity = parseFloat(document.getElementById("item-quantity").value);
                        var unitPrice = parseFloat(document.getElementById("unit-price").value);
                        var totalCost = quantity * unitPrice;
                        document.getElementById("total-cost").value = totalCost.toFixed(2);
                    }
                </script>
                <button type="submit">Add Inventory</button>
            </form>
        </div>

           

           
        </main>
    </div>
</body>
</html>