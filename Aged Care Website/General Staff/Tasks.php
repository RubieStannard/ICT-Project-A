<!DOCTYPE html >
<html lang="en">
<head>
<meta charset="utf-8">
<title>Tasks</title>
<link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
<link rel="stylesheet" href="tasks.css">
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
                        <a href="Patientmanagement.php"><span class="las la-igloo"></span>
                        <span>Patient Management</span></a>
                    </li>
                    <li>
                        <a href="StaffRoster.php"><span class="lab la-accessible-icon dropdown"></span>
                        <span>Roster</span></a>
                    </li>
                    <li>
                        <a href="Tasks.php"  class="active"><span class="las la-bell"></span>
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
                            <small>General Staff</small>
                        </div>
                    </div>
                

            </header>

            <main>
                
                <section>
                    <h2>Current Tasks</h2>
                    <div class="task-list">
                        <!-- Example task -->
                        <div class="task">
                            <span class="task-desc">Check medication stock</span>
                            <span class="task-deadline">Due: 2024-05-10</span>
                            <button class="mark-complete">Mark as Complete</button>
                        </div>
                        <!-- Additional tasks can be added here -->
                    </div>
                </section>

            
            </main>
        </div>
    </div>
</body>
</html>