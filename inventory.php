<?php
include 'db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Responsive Inventory System</title>
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #333;
            color: white;
            padding: 1rem;
            text-align: center;
        }

        /* Responsive navigation bar */
        nav {
            display: flex;
            justify-content: space-between;
            background-color: #444;
            padding: 0.5rem;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin-right: 1rem;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
        }

        /* Responsive layout */
        .container {
            padding: 2rem;
        }

        .search-bar {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 1rem;
        }

        .search-bar input {
            padding: 0.5rem;
            width: 200px;
        }

        .inventory-table {
            width: 100%;
            border-collapse: collapse;
        }

        .inventory-table th, .inventory-table td {
            padding: 0.75rem;
            border: 1px solid #ddd;
            text-align: left;
        }

        .inventory-table th {
            background-color: #f4f4f4;
        }

        /* Mobile responsiveness */
        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
                align-items: center;
            }

            .search-bar input {
                width: 100%;
            }

            .inventory-table, .inventory-table th, .inventory-table td {
                display: block;
                width: 100%;
            }

            .inventory-table th, .inventory-table td {
                text-align: right;
                padding-left: 50%;
            }

            .inventory-table th::before, .inventory-table td::before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 45%;
                padding-left: 1rem;
                font-weight: bold;
                text-align: left;
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
        <h1>Inventory System</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Inventory</a></li>
            <li><a href="#">Add Item</a></li>
            <li><a href="#">Return Item</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="search-bar">
            <input type="text" placeholder="Search Inventory...">
        </div>

        <table class="inventory-table">
            <thead>
                <tr>
                    <th>Item ID</th>
                    <th>Item Name</th>
                    <th>Category</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-label="Item ID">001</td>
                    <td data-label="Item Name">Excavator</td>
                    <td data-label="Category">Heavy Machinery</td>
                    <td data-label="Quantity">5</td>
                    <td data-label="Action"><button>Details</button></td>
                </tr>
                <tr>
                    <td data-label="Item ID">002</td>
                    <td data-label="Item Name">Bulldozer</td>
                    <td data-label="Category">Heavy Machinery</td>
                    <td data-label="Quantity">3</td>
                    <td data-label="Action"><button>Details</button></td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js">
    </script>
</html>
