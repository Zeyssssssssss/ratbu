<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Record</title>
    <!-- Bootstrap CSS for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
       

<div class="container mt-5">
    <h2 class="text-center">Add New Record</h2>
    <form id="newRecordForm" action="submit_record.php" method="POST">
        <div class="mb-3">
            <label for="itemName" class="form-label">Item Name</label>
            <input type="text" class="form-control" id="itemName" name="itemName" placeholder="Enter item name" required>
        </div>
        
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity" required>
        </div>
        
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" id="category" name="category" required>
                <option value="">Select a category</option>
                <option value="Construction">Construction</option>
                <option value="Heavy Machinery">Heavy Machinery</option>
                <option value="Tools">Tools</option>
            </select>
        </div>
        
        <div class="mb-3">
            <label for="purchaseDate" class="form-label">Purchase Date</label>
            <input type="date" class="form-control" id="purchaseDate" name="purchaseDate" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<!-- Bootstrap JS for interactivity -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
