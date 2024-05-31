<!DOCTYPE html >
<html lang="en">
<head>
<meta charset="utf-8">
<title>Inventory</title>
<link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
<link rel="stylesheet"  type="text/css" href="inventory.css">
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
            <h2>Assets</h2>
            <br>
            <!-- PHP code to fetch and display data -->
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

            // Check if the delete button is clicked
            if(isset($_POST['delete_id'])) {
                // Get the ID of the row to be deleted
                $id_to_delete = $_POST['delete_id'];

                // Prepare and bind the delete statement
                $stmt = $conn->prepare("DELETE FROM medicine WHERE id = ?");
                $stmt->bind_param("s", $id_to_delete);

                // Execute the delete statement
                if ($stmt->execute()) {
                    // Row deleted successfully
                    echo "";
                } else {
                    // Error occurred
                    echo "Error: " . $conn->error;
                }

                // Close prepared statement
                $stmt->close();
            }
            // Query to fetch data from the "vendor" table
            $sql = "SELECT * FROM medicine"; // Adjust the table name accordingly
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0) {
                echo "<h3>Medicine Table</h3>";
                echo "<table border='1'>";
                echo "<tr class='item-header'>";
                echo "<th>Item Name</th>";
                echo "<th>Item ID</th>";
                echo "<th>Supplier</th>";
                echo "<th>Action</th>";
                echo "</tr>";

                // Output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr class='items'>";
                    echo "<td>".$row['ItemName']."</td>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['Supplier']."</td>";
                    echo "<td class='action-cell'>"; // Apply class to ensure non-wrapping
                    echo "<a href='InventoryEdit.php?id=" . $row['id'] . "'><button>Edit</button></a>";
                    echo "<form method='post' style='display: inline;'><input type='hidden' name='delete_id' value='".$row['id']."'><input type='submit' value='Delete'></form>";
                    echo "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "No records found";
            }

            // Close connection
            $conn->close();
            ?>
<br>
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

                // Check if the delete button is clicked
                if(isset($_POST['delete_id'])) {
                    // Get the ID of the row to be deleted
                    $id_to_delete = $_POST['delete_id'];

                    // Prepare and bind the delete statement
                    $stmt = $conn->prepare("DELETE FROM medicine WHERE id = ?");
                    $stmt->bind_param("s", $id_to_delete);

                    // Execute the delete statement
                    if ($stmt->execute()) {
                        // Row deleted successfully
                        echo "";
                    } else {
                        // Error occurred
                        echo "Error: " . $conn->error;
                    }

                    // Close prepared statement
                    $stmt->close();
                }
                // Query to fetch data from the "vendor" table
                $sql = "SELECT * FROM medicalsupplies"; // Adjust the table name accordingly
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0) {
                    echo "<h3>Medical Supplies Table</h3>";
                    echo "<table border='1'>";
                    echo "<tr class='item-header'>";
                    echo "<th>Item Name</th>";
                    echo "<th>Item ID</th>";
                    echo "<th>Supplier</th>";
                    echo "<th>Action</th>";
                    echo "</tr>";

                    // Output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr class='items'>";
                        echo "<td>".$row['ItemName']."</td>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['Supplier']."</td>";
                        echo "<td class='action-cell'>"; // Apply class to ensure non-wrapping
                        echo "<a href='medicalEdit.php?id=" . $row['id'] . "'><button>Edit</button></a>";
                        echo "<form method='post' style='display: inline;'><input type='hidden' name='delete_id' value='".$row['id']."'><input type='submit' value='Delete'></form>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "No records found";
                }

                // Close connection
                $conn->close();
            ?>
    
    <br>
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

                // Check if the delete button is clicked
                if(isset($_POST['delete_id'])) {
                    // Get the ID of the row to be deleted
                    $id_to_delete = $_POST['delete_id'];

                    // Prepare and bind the delete statement
                    $stmt = $conn->prepare("DELETE FROM medicine WHERE id = ?");
                    $stmt->bind_param("s", $id_to_delete);

                    // Execute the delete statement
                    if ($stmt->execute()) {
                        // Row deleted successfully
                        echo "";
                    } else {
                        // Error occurred
                        echo "Error: " . $conn->error;
                    }

                    // Close prepared statement
                    $stmt->close();
                }
                // Query to fetch data from the "vendor" table
                $sql = "SELECT * FROM food"; // Adjust the table name accordingly
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0) {
                    echo "<h3>Food Table</h3>";
                    echo "<table border='1'>";
                    echo "<tr class='item-header'>";
                    echo "<th>Item Name</th>";
                    echo "<th>Item ID</th>";
                    echo "<th>Supplier</th>";
                    echo "<th>Action</th>";
                    echo "</tr>";

                    // Output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr class='items'>";
                        echo "<td>".$row['ItemName']."</td>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['Supplier']."</td>";
                        echo "<td class='action-cell'>"; // Apply class to ensure non-wrapping
                        echo "<a href='foodEdit.php?id=" . $row['id'] . "'><button>Edit</button></a>";
                        echo "<form method='post' style='display: inline;'><input type='hidden' name='delete_id' value='".$row['id']."'><input type='submit' value='Delete'></form>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "No records found";
                }

                // Close connection
                $conn->close();
            ?>
 <br>
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

                // Check if the delete button is clicked
                if(isset($_POST['delete_id'])) {
                    // Get the ID of the row to be deleted
                    $id_to_delete = $_POST['delete_id'];

                    // Prepare and bind the delete statement
                    $stmt = $conn->prepare("DELETE FROM medicine WHERE id = ?");
                    $stmt->bind_param("s", $id_to_delete);

                    // Execute the delete statement
                    if ($stmt->execute()) {
                        // Row deleted successfully
                        echo "";
                    } else {
                        // Error occurred
                        echo "Error: " . $conn->error;
                    }

                    // Close prepared statement
                    $stmt->close();
                }
                // Query to fetch data from the "vendor" table
                $sql = "SELECT * FROM cleaningsupplies"; // Adjust the table name accordingly
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0) {
                    echo "<h3>Cleaning Supplies Table</h3>";
                    echo "<table border='1'>";
                    echo "<tr class='item-header'>";
                    echo "<th>Item Name</th>";
                    echo "<th>Item ID</th>";
                    echo "<th>Supplier</th>";
                    echo "<th>Action</th>";
                    echo "</tr>";

                    // Output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr class='items'>";
                        echo "<td>".$row['ItemName']."</td>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['Supplier']."</td>";
                        echo "<td class='action-cell'>"; // Apply class to ensure non-wrapping
                        echo "<a href='hygieneEdit.php?id=" . $row['id'] . "'><button>Edit</button></a>";
                        echo "<form method='post' style='display: inline;'><input type='hidden' name='delete_id' value='".$row['id']."'><input type='submit' value='Delete'></form>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "No records found";
                }

                // Close connection
                $conn->close();
            ?>
 <br>
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

                // Check if the delete button is clicked
                if(isset($_POST['delete_id'])) {
                    // Get the ID of the row to be deleted
                    $id_to_delete = $_POST['delete_id'];

                    // Prepare and bind the delete statement
                    $stmt = $conn->prepare("DELETE FROM medicine WHERE id = ?");
                    $stmt->bind_param("s", $id_to_delete);

                    // Execute the delete statement
                    if ($stmt->execute()) {
                        // Row deleted successfully
                        echo "";
                    } else {
                        // Error occurred
                        echo "Error: " . $conn->error;
                    }

                    // Close prepared statement
                    $stmt->close();
                }
                // Query to fetch data from the "vendor" table
                $sql = "SELECT * FROM linen"; // Adjust the table name accordingly
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0) {
                    echo "<h3>Linen Table</h3>";
                    echo "<table border='1'>";
                    echo "<tr class='item-header'>";
                    echo "<th>Item Name</th>";
                    echo "<th>Item ID</th>";
                    echo "<th>Supplier</th>";
                    echo "<th>Action</th>";
                    echo "</tr>";

                    // Output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr class='items'>";
                        echo "<td>".$row['ItemName']."</td>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['Supplier']."</td>";
                        echo "<td class='action-cell'>"; // Apply class to ensure non-wrapping
                        echo "<a href='linenEdit.php?id=" . $row['id'] . "'><button>Edit</button></a>";
                        echo "<form method='post' style='display: inline;'><input type='hidden' name='delete_id' value='".$row['id']."'><input type='submit' value='Delete'></form>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "No records found";
                }

                // Close connection
                $conn->close();
            ?>

           
        </main>
    </div>
</body>
</html>