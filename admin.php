<?php
// admin.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .admin-panel {
            text-align: center;
        }
        .admin-panel h2 {
            font-size: 2em;
            color: #333;
        }
        .admin-panel a {
            display: block;
            margin: 10px 0;
            font-size: 1.5em;
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .admin-panel a:hover {
            color: #0056b3;
        }
    </style>
    <title>Admin Control Panel</title>
</head>
<body>
    <div class="admin-panel">
        <h2>Admin Control Panel</h2>
        <a href='insert.php'>Insert</a>
        <a href='update.php'>Update</a>
        <a href='delete.php'>Delete</a>
        <a href='display.php'>Display</a>
    </div>
</body>
</html>
