<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Manage Users</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        /* General Styles */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #212529;
            color: #ffffff;
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
            background-color: #1a1c1f;
            padding: 20px;
            box-shadow: 4px 0 15px rgba(0, 0, 0, 0.5);
            border-right: 2px solid #76B900;
        }

        .sidebar h2 {
            font-size: 1.5rem;
            color: #76B900;
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
            color: #ffffff;
            font-size: 1.1rem;
            padding: 10px;
            display: block;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .sidebar ul li a:hover {
            background-color: #76B900;
            color: #212529;
        }

        /* Main Content */
        .main-content {
            flex: 1;
            background-color: #1e2023;
            padding: 40px;
            display: flex;
            flex-direction: column;
        }

        .main-content h1 {
            font-size: 2.5rem;
            color: #ffffff;
            margin-bottom: 20px;
            text-align: center;
        }

        .user-table {
            width: 100%;
            border-collapse: collapse;
        }

        .user-table th, .user-table td {
            padding: 15px;
            text-align: left;
            border-bottom: 2px solid #292b2e;
        }

        .user-table th {
            background-color: #292b2e;
            color: #76B900;
        }

        .user-table td {
            background-color: #1e2023;
        }

        .user-table tr:hover td {
            background-color: #292b2e;
        }

        .action-buttons a {
            padding: 8px 12px;
            border-radius: 5px;
            color: #ffffff;
            text-decoration: none;
            margin-right: 10px;
        }

        .edit-btn {
            background-color: #76B900;
        }

        .delete-btn {
            background-color: #e74c3c;
        }

        .edit-btn:hover {
            background-color: #5a8f00;
        }

        .delete-btn:hover {
            background-color: #c0392b;
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
                <li><a href="adminUser.php" class="active">Users</a></li>
                <li><a href="adminSettings.php">Settings</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <div class="main-content">
            <h1>Manage Users</h1>
            <table class="user-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Tom</td>
                        <td>Tom@example.com</td>
                        <td>Admin</td>
                        <td class="action-buttons">
                            <a href="#" class="edit-btn">Edit</a>
                            <a href="#" class="delete-btn">Delete</a>
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                    <tr>
                        <td>2</td>
                        <td>Arby</td>
                        <td>Arby@example.com</td>
                        <td>Admin</td>
                        <td class="action-buttons">
                            <a href="#" class="edit-btn">Edit</a>
                            <a href="#" class="delete-btn">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
