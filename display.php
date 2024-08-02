<?php
// display.php
include 'config.php';
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
            padding: 20px;
            background-color: #f0f0f0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
    <title>Mobile Sales</title>
</head>
<body>
    <h2>Mobile Sales Inventory</h2>
    <?php
    $sql = "SELECT id, model, brand, price, stock FROM mobiles";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Model</th><th>Brand</th><th>Price</th><th>Stock</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["id"]."</td><td>".$row["model"]."</td><td>".$row["brand"]."</td><td>".$row["price"]."</td><td>".$row["stock"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No results found.</p>";
    }

    $conn->close();
    ?>
</body>
</html>
