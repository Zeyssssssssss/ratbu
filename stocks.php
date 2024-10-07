<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar and Stocks Management</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            background-color: #f9f9f9;
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
            margin-left: 260px;
            padding: 20px;
            flex-grow: 1;
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

        /* Search bar styles */
        .search-bar {
            margin-bottom: 1rem;
            display: flex;
            justify-content: flex-end;
        }

        .search-bar input {
            padding: 0.5rem;
            width: 200px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        /* Stock table styles */
        .stock-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 2rem;
        }

        .stock-table th,
        .stock-table td {
            padding: 0.75rem;
            border: 1px solid #ddd;
            text-align: left;
        }

        .stock-table th {
            background-color: #f4f4f4;
        }

        /* Button styles */
        button {
            padding: 0.75rem;
            border: none;
            border-radius: 4px;
            background-color: #333;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 1rem;
        }

        button:hover {
            background-color: #555;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            h2 {
                font-size: 1.5rem;
            }

            .search-bar {
                flex-direction: column;
                align-items: flex-end;
            }

            .search-bar input {
                width: 100%;
                margin-bottom: 1rem;
            }

            .stock-table,
            .stock-table th,
            .stock-table td {
                display: block;
                width: 100%;
            }

            .stock-table th,
            .stock-table td {
                text-align: right;
                padding-left: 50%;
            }

            .stock-table th::before,
            .stock-table td::before {
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
            <h1>Stocks Management</h1>
        </header>

        <div class="container">
            <div class="search-bar">
                <input type="text" placeholder="Search Stocks...">
            </div>

            <h2>Current Stock</h2>
            <table class="stock-table">
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
                        <td data-label="Action"><button>Edit</button></td>
                    </tr>
                    <tr>
                        <td data-label="Item ID">002</td>
                        <td data-label="Item Name">Bulldozer</td>
                        <td data-label="Category">Heavy Machinery</td>
                        <td data-label="Quantity">3</td>
                        <td data-label="Action"><button>Edit</button></td>
                    </tr>
                    <tr>
                        <td data-label="Item ID">003</td>
                        <td data-label="Item Name">Backhoe Loader</td>
                        <td data-label="Category">Heavy Machinery</td>
                        <td data-label="Quantity">4</td>
                        <td data-label="Action"><button>Edit</button></td>
                    </tr>
                </tbody>
            </table>

            <button>Add New Stock</button>
        </div>
    </div>

</body>
</html>
