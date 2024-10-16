<?php
// Database connection details
$host = 'localhost';
$dbname = 'income_db';
$username = 'root';
$password = '';

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data correct
    $amount = $_POST['amount'];
    $description = $_POST['description'];
    $date = $_POST['date'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO expenses (amount, description, date) VALUES (?, ?, ?)");
    $stmt->bind_param("dss", $amount, $description, $date);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Expense added successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>

<a href="total_expenses.php"> total </a>
