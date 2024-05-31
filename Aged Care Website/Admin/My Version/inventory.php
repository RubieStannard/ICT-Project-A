<?php
    session_start(); // Start the session
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="ICT Project A Website" />
	<meta name="keywords" content="HTML, CSS, JavaScript, PHP" />
	<meta name="author" content="Group 2" />
    <link rel="stylesheet" href="style/inventory.css">
	<title>ICT30017 - ICT Project A</title>
    <style>
        <?php include "style/inventory.css" ?>
    </style>
</head>
<body>
<?php
// Simulating user role, replace with actual logic to get user role
$userRole = '\staff';

// HTML navbar
echo '<ul class="navbar">';
echo '<li><a href="home.php">Home</a></li>';
echo '<li><a href="account.php">Account</a></li>';
echo '<li><a href="facilities.php">Facilities</a></li>';
echo '<li><a href="member_profile_list">Members</a></li>';
echo '<li><a href="schedule.php">Schedule</a></li>';
echo '<li><a href="services.php">Services</a></li>';


// Check if the user is an admin
if ($userRole === '\admin') {
    // Display the "Inventory" option for admins
    echo '<li><a href="inventory.php">Inventory</a></li>';
    echo '<li><a href="staff_profile_list.php">Staff</a></li>';
}

echo '</ul>';
?>
<p>CODE WITH PHP. LEAVE INFORMATION HERE UNTIL PHP IS CODED</p>
<table> <!-- Medication table -->
    <tr>
        <th><b>Medication</b></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <tr>
        <td><b>ID</b></td>
        <td><b>Item</b></td>
        <td><b>Quantity</b></td>
        <td><b>Supplier</b></td>
        <td></td>
    </tr>
    <tr>
        <td>1</td>
        <td>Metformin</td>
        <td>500</td>
        <td>ABC</td>
        <td><a href="inventory_add_form_1.php" target="_blank">Add inventory</a></td>
    </tr>
    <tr>
        <td>2</td>
        <td>Ramipril</td>
        <td>300</td>
        <td>DEF</td>
        <td><a href="inventory_add_form_1.php" target="_blank">Add inventory</a></td>
    </tr>
    <tr>
        <td>3</td>
        <td>Atorvastatin</td>
        <td>400</td>
        <td>GHI</td>
        <td><a href="inventory_add_form_1.php" target="_blank">Add inventory</a></td>
    </tr>
</table>
<table> <!-- Food table -->
    <tr>
        <th><b>Food</b></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <tr>
        <td><b>ID</b></td>
        <td><b>Item</b></td>
        <td><b>Quantity</b></td>
        <td><b>Supplier</b></td>
        <td></td>
    </tr>
    <tr>
        <td>4</td>
        <td>Fruits and vegetables</td>
        <td>50</td>
        <td>ABC</td>
        <td><a href="inventory_add_form_2.php" target="_blank">Add inventory</a></td>
    </tr>
    <tr>
        <td>5</td>
        <td>Dairy products</td>
        <td>200</td>
        <td>DEF</td>
        <td><a href="inventory_add_form_2.php" target="_blank">Add inventory</a></td>
    </tr>
    <tr>
        <td>6</td>
        <td>Canned goods</td>
        <td>1000</td>
        <td>GHI</td>
        <td><a href="inventory_add_form_2.php" target="_blank">Add inventory</a></td>
    </tr>
</table>
<table> <!-- Medical supplies table -->
    <tr>
        <th><b>Medical Supplies</b></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <tr>
        <td><b>ID</b></td>
        <td><b>Item</b></td>
        <td><b>Quantity</b></td>
        <td><b>Supplier</b></td>
        <td></td>
    </tr>
    <tr>
        <td>7</td>
        <td>Bandages</td>
        <td>1000</td>
        <td>ABC</td>
        <td><a href="inventory_add_form_3.php" target="_blank">Add inventory</a></td>
    </tr>
    <tr>
        <td>8</td>
        <td>Wound dressings</td>
        <td>800</td>
        <td>DEF</td>
        <td><a href="inventory_add_form_3.php" target="_blank">Add inventory</a></td>
    </tr>
    <tr>
        <td>9</td>
        <td>Syringes</td>
        <td>2000</td>
        <td>GHI</td>
        <td><a href="inventory_add_form_3.php" target="_blank">Add inventory</a></td>
    </tr>
</table>
<table> <!-- Hygiene products table -->
    <tr>
        <th><b>Hygiene products</b></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <tr>
        <td><b>ID</b></td>
        <td><b>Item</b></td>
        <td><b>Quantity</b></td>
        <td><b>Supplier</b></td>
        <td></td>
    </tr>
    <tr>
        <td>10</td>
        <td>Toothpaste</td>
        <td>100</td>
        <td>ABC</td>
        <td><a href="inventory_add_form_4.php" target="_blank">Add inventory</a></td>
    </tr>
    <tr>
        <td>11</td>
        <td>Toilet paper</td>
        <td>400</td>
        <td>DEF</td>
        <td><a href="inventory_add_form_4.php" target="_blank">Add inventory</a></td>
    </tr>
    <tr>
        <td>12</td>
        <td>Shampoo and conditioner</td>
        <td>100</td>
        <td>GHI</td>
        <td><a href="inventory_add_form_4.php" target="_blank">Add inventory</a></td>
    </tr>
</table>
<table> <!-- Cleaning supplies table -->
    <tr>
        <th><b>Cleaning Supplies</b></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <tr>
        <td><b>ID</b></td>
        <td><b>Item</b></td>
        <td><b>Quantity</b></td>
        <td><b>Supplier</b></td>
        <td></td>
    </tr>
    <tr>
        <td>13</td>
        <td>Disinfectant</td>
        <td>50</td>
        <td>ABC</td>
        <td><a href="inventory_add_form_5.php" target="_blank">Add inventory</a></td>
    </tr>
    <tr>
        <td>14</td>
        <td>Detergent</td>
        <td>100</td>
        <td>DEF</td>
        <td><a href="inventory_add_form_5.php" target="_blank">Add inventory</a></td>
    </tr>
    <tr>
        <td>15</td>
        <td>Paper products</td>
        <td>Paper products</td>
        <td>1000</td>
        <td>GHI</td>
        <td><a href="inventory_add_form_5.php" target="_blank">Add inventory</a></td>
    </tr>
</table>
<?php
    echo "<p>Here</p>";
?>
    <footer><p><em>Copyright 2024</em></p></footer>
</body>
</html>