<?php
// Database connection details
$host = 'localhost'; // Change if needed
$dbname = 'income_db'; // Replace with your actual database name
$username = 'root'; // Your MySQL username
$password = ''; // Your MySQL password

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to calculate the total expenses
$sql = "SELECT SUM(amount) AS total_expenses FROM expenses";
$result = $conn->query($sql);

if ($result) {
    // Fetch the result
    $row = $result->fetch_assoc();
    $totalExpenses = $row['total_expenses'] ? $row['total_expenses'] : 0; // Ensure it's not null

    echo "Total Expenses: $" . number_format($totalExpenses, 2);
} else {
    echo "No expenses found.";
}

// Close the database connection
$conn->close();
?>
