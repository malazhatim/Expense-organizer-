<?php
// Database connection details
define('DB_HOST', 'localhost'); // Change if needed
define('DB_NAME', 'income_db'); // Replace with your actual database name
define('DB_USER', 'root'); // Your MySQL username
define('DB_PASS', ''); // Your MySQL password

// Create a connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to get all expenses
$sql = "SELECT id, description, amount, date FROM expenses";
$result = $conn->query($sql);

// Initialize total expenses and highest expense
$totalExpenses = 0;
$highestExpense = 0;
$highestExpenseDetails = null;

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Calculate total expenses
        $totalExpenses += $row['amount'];
        
        // Determine the highest expense
        if ($row['amount'] > $highestExpense) {
            $highestExpense = $row['amount'];
            $highestExpenseDetails = $row; // Store details of the highest expense
        }
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Report</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Expense Report</h1>

    <?php if (isset($result) && $result->num_rows > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Description</th>
                    <th>Amount</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Reset the result pointer and output expense rows
                $result->data_seek(0); // Move to the start of the result set
                while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo htmlspecialchars($row['description']); ?></td>
                        <td>$<?php echo number_format($row['amount'], 2); ?></td>
                        <td><?php echo htmlspecialchars($row['date']); ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <h2>Total Expenses: $<?php echo number_format($totalExpenses, 2); ?></h2>
        <h2>Highest Expense: $<?php echo number_format($highestExpense, 2); ?> (<?php echo htmlspecialchars($highestExpenseDetails['description']); ?> on <?php echo htmlspecialchars($highestExpenseDetails['date']); ?>)</h2>
    <?php else: ?>
        <p>No expenses found.</p>
    <?php endif; ?>

    <a href="dash.php">Go to Dashboard</a>

    <?php
    // Close the database connection
    $conn->close();
    ?>
</body>
</html>
