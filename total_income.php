<?php
// Database connection
$servername = "localhost";
$username = "root"; // use your database username
$password = ""; // use your database password
$dbname = "income_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to get the sum of each income type
$sql = "SELECT income_type, SUM(amount) AS total_amount FROM income GROUP BY income_type";
$result = $conn->query($sql);

$totals = [];
$grandTotal = 0;

// Fetch the results and populate the totals array
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $totals[$row['income_type']] = $row['total_amount'];
        $grandTotal += $row['total_amount'];
    }
}

// Close the connection
$conn->close();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Income Summary</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e2e2e2;
        }
        strong {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>Total Income Summary</h2>
    <table>
        <tr>
            <th>Income Type</th>
            <th>Total Amount</th>
        </tr>
        <?php foreach ($totals as $type => $amount): ?>
        <tr>
            <td><?php echo htmlspecialchars($type); ?></td>
            <td><?php echo number_format($amount, 2); ?></td>
        </tr>
        <?php endforeach; ?>
        <tr>
            <td><strong>Grand Total</strong></td>
            <td><strong><?php echo number_format($grandTotal, 2); ?></strong></td>
        </tr>
    </table>
</body>
</html>

<a href="dash.php">dash </a>
