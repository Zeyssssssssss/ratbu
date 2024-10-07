<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f9f9f9;
        }

        header {
            background-color: #333;
            color: white;
            padding: 1rem;
            text-align: center;
        }

        .container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 2rem;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-bottom: 1rem;
            color: #333;
        }

        /* Form styles */
        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 0.5rem;
            color: #666;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="checkbox"] {
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
        }

        input[type="checkbox"] {
            width: auto;
        }

        button {
            padding: 0.75rem;
            border: none;
            border-radius: 4px;
            background-color: #333;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #555;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            h2 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>

<title>Sidebar Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
        }

        /* Sidebar style */
        .sidebar {
            height: 100vh;
            width: 250px;
            background-color: #333;
            padding-top: 20px;
            position: fixed;
        }

        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
        }

        .sidebar a:hover {
            background-color: #575757;
        }

        /* Main content */
        .main-content {
            margin-left: 260px; /* Same as sidebar width + padding */
            padding: 20px;
            flex-grow: 1;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#dashboard">Dashboard</a>
        <a href="inventory.php">Inventory</a>
        <a href="nrecord.php">New Record</a>
        <a href="stocks.php">Stocks</a>
        <a href="tracker.php">Tracker</a>
        <a href="return.php">Return Record</a>
        <a href="settings.php">Settings</a>
    </div>

    <!-- Main content -->
    <div class="main-content">
    <header>
        <h1>Settings</h1>
    </header>

    <div class="container">
        <h2>User Profile</h2>
        <form>
            <label for="username">Username</label>
            <input type="text" id="username" placeholder="Enter your username" required>

            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Enter your email" required>

        

            <h2>Change Password</h2>
            <label for="current-password">Current Password</label>
            <input type="password" id="current-password" placeholder="Enter current password" required>

            <label for="new-password">New Password</label>
            <input type="password" id="new-password" placeholder="Enter new password" required>

            <label for="confirm-password">Confirm New Password</label>
            <input type="password" id="confirm-password" placeholder="Confirm new password" required>

            <button type="submit">Save Changes</button>
        </form>
    </div>

</body>
</html>
