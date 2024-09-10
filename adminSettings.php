<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Settings</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        /* General Styles */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #212529; /* $nvidia_dark_gray */
            color: #ffffff; /* $nvidia_light */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .wrapper {
            display: flex;
            width: 90%;
            height: 90vh;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background-color: #1a1c1f; /* same as original */
            padding: 20px;
            box-shadow: 4px 0 15px rgba(0, 0, 0, 0.5);
            border-right: 2px solid #76B900; /* $nvidia_green */
        }

        .sidebar h2 {
            font-size: 1.5rem;
            color: #76B900; /* $nvidia_green */
            margin-bottom: 30px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            margin-bottom: 20px;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #ffffff; /* $nvidia_light */
            font-size: 1.1rem;
            padding: 10px;
            display: block;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .sidebar ul li a:hover {
            background-color: #76B900; /* $nvidia_green */
            color: #1a1c1f;
        }

        /* Main Content */
        .main-content {
            flex: 1;
            background-color: #212529; /* $nvidia_dark_gray */
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .main-content h1 {
            font-size: 2.5rem;
            color: #ffffff; /* $nvidia_light */
            margin-bottom: 20px;
            text-align: center;
        }

        .settings-section {
            width: 100%;
            max-width: 600px;
            background-color: #292b2e; /* same as original */
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
            border: 2px solid #76B900; /* $nvidia_green */
        }

        .settings-section h2 {
            font-size: 2rem;
            color: #76B900; /* $nvidia_green */
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .form-group input[type="text"], 
        .form-group input[type="password"], 
        .form-group input[type="email"] {
            width: 100%;
            padding: 12px;
            font-size: 1.1rem;
            border: none;
            border-radius: 5px;
            background-color: #1e2023; /* $nvidia_dark_gray */
            color: #ffffff; /* $nvidia_light */
            box-shadow: inset 0 0 5px rgba(0, 191, 165, 0.2);
        }

        .form-group input:focus {
            outline: none;
            box-shadow: inset 0 0 10px rgba(0, 191, 165, 0.8);
        }

        .form-group button {
            padding: 12px 20px;
            font-size: 1.1rem;
            background-color: #76B900; /* $nvidia_green */
            color: #212529; /* $nvidia_dark_gray */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: block;
            width: 100%;
        }

        .form-group button:hover {
            background-color: #008f82;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <aside class="sidebar">
            <h2>Admin Panel</h2>
            <ul>
                <li><a href="admin.php">Dashboard</a></li>
                <li><a href="adminUser.php">Users</a></li>
                <li><a href="adminSettings.php" class="active">Settings</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <div class="main-content">
            <h1>Settings</h1>
            <div class="settings-section">
                <h2>Profile Settings</h2>
                <form action="#" method="POST">
                    <!-- Profile Information -->
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="admin@example.com" required>
                    </div>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Admin" required>
                    </div>

                    <!-- Password Change -->
                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input type="password" id="password" name="password" placeholder="••••••••" required>
                    </div>

                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" id="confirm-password" name="confirm-password" placeholder="••••••••" required>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group">
                        <button type="submit">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
