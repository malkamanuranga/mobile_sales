<?php

// delete.php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $sql = "DELETE FROM mobiles WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .navbar {
            background-color: #333;
            overflow: hidden;
        }
        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        .form-container {
            text-align: center;
            background: #fff;
            padding: 20px;
            margin: 20px auto;
            width: 50%;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            margin-bottom: 20px;
        }
        .form-container input[type="text"] {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-container input[type="submit"] {
            padding: 10px 20px;
            border: none;
            background-color: #007bff;
            color: white;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
        }
        .form-container input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
    <title>Delete Mobile</title>
</head>
<body>
    <div class="navbar">
        <a href="admin.php">Admin Control Panel</a>
        <a href="insert.php">Insert</a>
        <a href="update.php">Update</a>
        <a href="delete.php">Delete</a>
        <a href="display.php">Display</a>
    </div>
    <div class="form-container">
        <h2>Delete Mobile</h2>
        <form method="post" action="delete.php">
            <input type="text" name="id" placeholder="ID" required><br>
            <input type="submit" value="Delete">
        </form>
    </div>
</body>
</html>
