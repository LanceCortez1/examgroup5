<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
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
                <h1>User Profile</h1>
            </header>
            <div class="content">
                <section class="profile-info">
                    <h2>Profile Information</h2>
                    <div class="profile-picture">
                        <img src="profile-pic-placeholder.png" alt="Profile Picture">
                    </div>
                    <div class="profile-details">
                        <p><strong>Name:</strong> John Doe</p>
                        <p><strong>Email:</strong> john.doe@example.com</p>
                        <p><strong>Joined:</strong> January 1, 2023</p>
                    </div>
                    <a href="editprofile.php" class="btn">Edit Profile</a>
                </section>
<style>
    /* General Styles */
body {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    background-color: #0c0c0c; /* Darker background for Nvidia theme */
    color: #e1e1e1; /* Lighter text color for contrast */
    display: flex;
    flex-direction: column;
    height: 100vh;
}

.wrapper {
    display: flex;
    flex: 1;
}

/* Sidebar Styling */
.sidebar {
    width: 300px;
    background-color: #1c1c1c; /* Darker gray for sidebar */
    padding: 30px;
    box-shadow: 4px 0 15px rgba(0, 0, 0, 0.5);
    border-right: 2px solid #76b900; /* Nvidia green border */
    z-index: 2; /* Ensure it is above other content */
}

.sidebar-header h2 {
    margin: 0;
    font-size: 2rem;
    color: #76b900; /* Nvidia green for header */
    text-transform: uppercase;
    font-weight: 600;
    text-shadow: 0 0 10px rgba(118, 185, 0, 0.8); /* Slightly lighter green shadow */
    margin-bottom: 40px;
}

.sidebar-menu {
    list-style: none;
    padding: 0;
    margin: 0;
}

.sidebar-menu li {
    margin-bottom: 20px;
}

.sidebar-menu a {
    text-decoration: none;
    color: #e1e1e1; /* Light gray text */
    font-size: 1.2rem;
    font-weight: 500;
    padding: 10px;
    border-radius: 5px;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
}

.sidebar-menu a::before {
    content: '⚡';
    margin-right: 10px;
    color: #76b900; /* Nvidia green for icons */
}

.sidebar-menu a:hover {
    background-color: #76b900; /* Nvidia green background on hover */
    color: #0c0c0c; /* Dark background for text contrast */
    transform: translateX(5px);
    box-shadow: 0 0 10px #76b900; /* Nvidia green shadow */
}

/* Main Content Styling */
.main-content {
    flex: 1;
    padding: 40px;
    background-color: #1c1c1c; /* Darker gray for main content */
    border-left: 4px solid #76b900; /* Nvidia green border */
    display: flex;
    flex-direction: column;
    justify-content: center;
    z-index: 1;
    position: relative;
    overflow: hidden;
}

.header {
    background-color: #2e2e2e; /* Dark gray for header background */
    padding: 30px;
    margin-bottom: 40px;
    border-radius: 12px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
    text-align: center;
    position: relative;
}

.header::before, .header::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    height: 2px;
    background: #76b900; /* Nvidia green for lines */
    transform: translateY(-50%);
    z-index: -1;
}

.header::before {
    width: 80%;
    opacity: 0.3;
}

.header::after {
    width: 100%;
    opacity: 0.1;
}

.header h1 {
    font-size: 2.5rem;
    font-weight: 700;
    color: #e1e1e1; /* Light gray text */
    text-transform: uppercase;
    letter-spacing: 2px;
    text-shadow: 0 0 10px #76b900; /* Nvidia green shadow */
    position: relative;
    z-index: 1;
    transition: color 0.4s ease;
}

.header:hover h1 {
    color: #76b900; /* Nvidia green on hover */
}

.content {
    display: flex;
    flex-direction: column;
    align-items: center;
    font-size: 1.2rem;
}

/* Profile Info Section Styling */
.profile-info {
    background-color: #2e2e2e; /* Dark gray for sections */
    padding: 40px;
    border-radius: 12px;
    border: 2px solid #76b900; /* Nvidia green border */
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
    width: 100%;
    max-width: 600px;
    margin-bottom: 20px;
    text-align: center;
}

.profile-info .profile-picture img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    border: 2px solid #76b900; /* Nvidia green border for profile picture */
    margin-bottom: 20px;
}

.profile-info .profile-details {
    margin-bottom: 20px;
}

.profile-info h2 {
    margin-bottom: 20px;
    font-size: 2rem;
    font-weight: 600;
    color: #e1e1e1; /* Light gray text */
    text-shadow: 0 0 5px rgba(118, 185, 0, 0.5); /* Slightly lighter green shadow */
}

.profile-info p {
    color: #e1e1e1; /* Light gray text */
    margin-bottom: 10px;
}

.profile-info .btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #76b900; /* Nvidia green */
    color: #0c0c0c; /* Dark background for text contrast */
    text-decoration: none;
    border-radius: 5px;
    transition: background 0.3s ease, transform 0.3s ease;
}

.profile-info .btn:hover {
    background-color: #4d8c00; /* Darker Nvidia green */
    transform: scale(1.05);
}

/* Recent Activity Section Styling */
.recent-activity {
    background-color: #2e2e2e; /* Dark gray for sections */
    padding: 40px;
    border-radius: 12px;
    border: 2px solid #76b900; /* Nvidia green border */
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
    width: 100%;
    max-width: 600px;
    text-align: center;
}

.recent-activity h2 {
    margin-bottom: 20px;
    font-size: 2rem;
    font-weight: 600;
    color: #e1e1e1; /* Light gray text */
    text-shadow: 0 0 5px rgba(118, 185, 0, 0.5); /* Slightly lighter green shadow */
}

.recent-activity ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.recent-activity li {
    margin-bottom: 15px;
    color: #e1e1e1; /* Light gray text */
}

