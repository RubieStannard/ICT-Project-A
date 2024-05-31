<!DOCTYPE html >
<html lang="en">
<head>
<meta charset="utf-8">
<title>Messenger</title>
<link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
<link rel="stylesheet" href="messenger.css">
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
                        <a href="messenger.php" class="active"><span class="las la-receipt"></span>
                        <span>Messenger</span></a>
                        <div class="sub-menu">
                            <a href="messenger.php" class="sub-item1"><i class="las la-angle-right"></i>New Messages</a>
                            <a href="inbox.html" class="sub-item"><i class="las la-angle-right"></i>Inbox</a>
                        </div>
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
                            <small>General Staff</small>
                        </div>
                    </div>
                

            </header>

            <main>
                <div class="container">
                  
                        <h1>Communication Portal</h1>
                    
                    <section class="email">
                        <h2>Send an Email</h2>
                        <form>
                            <input type="email" placeholder="Recipient's email" required>
                            <input type="text" placeholder="Subject">
                            <textarea placeholder="Your message"></textarea>
                            <button type="submit">Send Email</button>
                        </form>
                    </section>
                    <section class="instant-message">
                        <h2>Instant Messages</h2>
                        <form>
                            <input type="text" placeholder="Recipient's username" required>
                            <textarea placeholder="Your message"></textarea>
                            <button type="submit">Send Message</button>
                        </form>
                    </section>
                    <section class="group-chat">
                        <h2>Create Group Chat</h2>
                        <form>
                            <input type="text" placeholder="Group Name" required>
                            <textarea placeholder="Add members (separate usernames with commas)"></textarea>
                            <button type="submit">Create Group</button>
                        </form>
                    </section>
                </div>
            
            </main>
        </div>
    </div>
</body>
</html>