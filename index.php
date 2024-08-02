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
        .welcome-container {
            text-align: center;
            background: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .welcome-container h1 {
            margin-bottom: 20px;
            font-size: 2em;
            color: #333;
        }
        .welcome-container h2 {
            margin-bottom: 20px;
            font-size: 1.5em;
            color: #555;
        }
        .admin-link {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 1.2em;
            color: white;
            background-color: #007bff;
            text-decoration: none;
            border-radius: 4px;
        }
        .admin-link:hover {
            background-color: #0056b3;
        }
    </style>
    <title>Online Mobile Sales</title>
</head>
<body>
    <div class="welcome-container">
        <h1>Welcome to Online Mobile Sales</h1>
        <h2>Admin Control Panel</h2>
        <a href="admin.php" class="admin-link">Go to Admin Panel</a>
    </div>
</body>
</html>
