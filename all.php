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

// Query for the total income
$incomeQuery = "SELECT SUM(amount) AS total_income FROM income";
$incomeResult = $conn->query($incomeQuery);

if ($incomeResult->num_rows > 0) {
    $incomeRow = $incomeResult->fetch_assoc();
    $totalIncome = $incomeRow['total_income'];
} else {
    $totalIncome = 0;
}

// Query for the total expenses
$expensesQuery = "SELECT SUM(amount) AS total_expenses FROM expenses";
$expensesResult = $conn->query($expensesQuery);

if ($expensesResult->num_rows > 0) {
    $expensesRow = $expensesResult->fetch_assoc();
    $totalExpenses = $expensesRow['total_expenses'];
} else {
    $totalExpenses = 0;
}

// Calculate the balance
$balance = $totalIncome - $totalExpenses;

// Display the results
echo "Total Income: $" . number_format($totalIncome, 2) . "<br>";
echo "Total Expenses: $" . number_format($totalExpenses, 2) . "<br>";
echo "Balance: $" . number_format($balance, 2);

// Close the connection
$conn->close();
?>
