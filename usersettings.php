<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Settings</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>User Dashboard</h2>
            </div>
            <ul class="sidebar-menu">
                <li><a href="userprofile.php">➤ Profile</a></li>
                <li><a href="usersettings.php">➤ Settings</a></li>
                <li><a href="recentactivity.php">➤ Recent Activity</a></li>
                <li><a href="userhelp.php">➤ Help</a></li>
                <li><a href="user.php">🡰 Back</a></li>
            </ul>
        </aside>
        
        <!-- Main Content -->
        <div class="main-content">
            <header class="header">
                <h1>Account Settings</h1>
            </header>
            <div class="content">
                <section class="settings-section">
                    <h2>Update Account Settings</h2>
                    <form class="settings-form">
                        <div class="form-group">
                            <label for="email">Change Email:</label>
                            <input type="email" id="email" placeholder="Enter new email">
                        </div>
                        <div class="form-group">
                            <label for="password">Change Password:</label>
                            <input type="password" id="password" placeholder="Enter new password">
                        </div>
                        <div class="form-group">
                            <label for="confirmpassword">Confirm Password:</label>
                            <input type="password" id="confirmpassword" placeholder="Confirm new password">
                        </div>
                        <button type="submit" class="btn">Save Changes</button>
                    </form>
                </section>
            </div>
        </div>
    </div>

    <style>
        /* General Styles */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #0c0c0c; /* Darker background */
            color: #e1e1e1; /* Lighter text */
            display: flex;
            height: 100vh;
        }

        .sidebar-menu a::before {
        content: '⚡';
        margin-right: 10px;
        color: #76b900; /* Nvidia green for icons */
    }

        .wrapper {
            display: flex;
            flex: 1;
        }

        /* Sidebar Styling */
        .sidebar {
            width: 300px;
            background-color: #1c1c1c; /* Dark gray */
            padding: 30px;
            border-right: 2px solid #76b900; /* Nvidia green */
        }

        .sidebar-header h2 {
            font-size: 2rem;
            color: #76b900;
            margin-bottom: 40px;
        }

        .sidebar-menu {
            list-style: none;
            padding: 0;
        }

        .sidebar-menu li {
            margin-bottom: 20px;
        }

        .sidebar-menu a {
            text-decoration: none;
            color: #e1e1e1;
            font-size: 1.2rem;
            padding: 10px;
            display: flex;
            align-items: center;
        }

        .sidebar-menu a:hover {
            background-color: #76b900;
            color: #0c0c0c;
        }

        /* Main Content Styling */
        .main-content {
            flex: 1;
            padding: 40px;
            background-color: #1c1c1c;
            border-left: 4px solid #76b900;
        }

        .header {
            background-color: #2e2e2e;
            padding: 30px;
            border-radius: 12px;
            margin-bottom: 40px;
            text-align: center;
        }

        .header h1 {
            font-size: 2.5rem;
            color: #e1e1e1;
            text-transform: uppercase;
        }

        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Settings Section Styling */
        .settings-section {
            background-color: #2e2e2e;
            padding: 40px;
            border-radius: 12px;
            border: 2px solid #76b900;
            width: 100%;
            max-width: 600px;
        }

        .settings-section h2 {
            margin-bottom: 20px;
            font-size: 2rem;
            color: #e1e1e1;
        }

        .settings-form {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #e1e1e1;
        }

        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #76b900;
            background-color: #1c1c1c;
            color: #e1e1e1;
        }

        .form-group input::placeholder {
            color: #b1b1b1;
        }

        .btn {
            padding: 10px 20px;
            background-color: #76b900;
            color: #0c0c0c;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #4d8c00;
        }
    </style>
</body>
</html>