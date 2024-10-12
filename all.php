<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "income_db";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize totals
$totalIncome = 0;
$totalExpenses = 0;

// Query for the total income
$incomeQuery = "SELECT SUM(amount) AS total_income FROM income";
$incomeResult = $conn->query($incomeQuery);

if ($incomeResult) {
    $incomeRow = $incomeResult->fetch_assoc();
    $totalIncome = $incomeRow['total_income'] ?? 0; // Use null coalescing to handle null values
} else {
    echo "Error retrieving total income: " . $conn->error;
}

// Query for the total expenses
$expensesQuery = "SELECT SUM(amount) AS total_expenses FROM expenses";
$expensesResult = $conn->query($expensesQuery);

if ($expensesResult) {
    $expensesRow = $expensesResult->fetch_assoc();
    $totalExpenses = $expensesRow['total_expenses'] ?? 0; // Use null coalescing to handle null values
} else {
    echo "Error retrieving total expenses: " . $conn->error;
}

// Calculate the balance
$balance = $totalIncome - $totalExpenses;

// Display the results within HTML structure
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Financial Overview</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h2 {
            color: #333;
        }
        p {
            font-size: 1.1em;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Financial Overview</h2>
        <p>Total Income: $<?php echo number_format($totalIncome, 2); ?></p>
        <p>Total Expenses: $<?php echo number_format($totalExpenses, 2); ?></p>
        <p>Balance: $<?php echo number_format($balance, 2); ?></p>
    </div>
</body>
</html>

<?php
// Close the connection
$conn->close();
?>

<a href="dash.php">dash </a>