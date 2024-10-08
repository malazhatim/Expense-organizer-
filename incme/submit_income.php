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

// Get form data i want to add 
$income_type = $_POST['income_type'];
$amount = $_POST['amount'];

// Validate form data
if (empty($income_type) || empty($amount)) {
    echo "All fields are required!";
} else {
    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO income (income_type, amount) VALUES (?, ?)");
    $stmt->bind_param("sd", $income_type, $amount);
    
    // Execute the statement
    if ($stmt->execute()) {
        echo "Income registered successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }
    
    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
