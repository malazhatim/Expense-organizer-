<?php
// Database connection
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "income_db"; // name of data base created 

// Connection to database normal
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//  input data from form to submit in database
$income_type = trim($_POST['income_type']);  // strim to delete any whitespace
$amount = trim($_POST['amount']);

// Validate input data
if (empty($income_type) || empty($amount) || !is_numeric($amount)) {
    echo "All fields are required, and amount must be a number!";
} else {
    //  SQL statement to insert data into the database table income 
    $stmt = $conn->prepare("INSERT INTO income (income_type, amount) VALUES (?, ?)");
    
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }


    $stmt->bind_param("sd", $income_type, $amount);  // s string & d digit number 
    
    // Execute the statement
    if ($stmt->execute()) {
        echo "Income registered successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection 
$conn->close();
?>

<a href="total_income.php">Total Income</a>
