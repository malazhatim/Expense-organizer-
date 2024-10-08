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

$totals = [
    'Salary' => 0,
    'Rent' => 0,
    'Other' => 0
];
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Total Income Summary</title>
</head>
<body>
    <h2>Total Income Summary</h2>
    <table border="1">
        <tr>
            <th>Income Type</th>
            <th>Total Amount</th>
        </tr>
        <tr>
            <td>Salary</td>
            <td><?php echo number_format($totals['Salary'], 2); ?></td>
        </tr>
        <tr>
            <td>Rent</td>
            <td><?php echo number_format($totals['Rent'], 2); ?></td>
        </tr>
        <tr>
            <td>Other</td>
            <td><?php echo number_format($totals['Other'], 2); ?></td>
        </tr>
        <tr>
            <td><strong>Grand Total</strong></td>
            <td><strong><?php echo number_format($grandTotal, 2); ?></strong></td>
        </tr>
    </table>
</body>
</html>
