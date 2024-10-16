<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "income_db"; // database name 

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

// Query for the total expenses and retrieve expenses by category
$expensesQuery = "SELECT category, SUM(amount) AS total FROM expenses GROUP BY category";
$expensesResult = $conn->query($expensesQuery);

$expenseData = [];
$totalExpenses = 0;
$maxExpenseCategory = '';
$maxExpenseAmount = 0;

if ($expensesResult) {
    while ($row = $expensesResult->fetch_assoc()) {
        $expenseData[] = [
            'category' => $row['category'],
            'total' => $row['total']
        ];
        $totalExpenses += $row['total'];

        // Find the category with the highest expense
        if ($row['total'] > $maxExpenseAmount) {
            $maxExpenseCategory = $row['category'];
            $maxExpenseAmount = $row['total'];
        }
    }
} else {
    echo "Error retrieving total expenses: " . $conn->error;
}

// Calculate the balance
$balance = $totalIncome - $totalExpenses;

// Prepare data for JavaScript
$expenseCategories = [];
$expenseTotals = [];
foreach ($expenseData as $expense) {
    $expenseCategories[] = $expense['category'];
    $expenseTotals[] = $expense['total'];
}

// Pass PHP data to JavaScript as JSON
$expenseCategoriesJson = json_encode($expenseCategories);
$expenseTotalsJson = json_encode($expenseTotals);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Financial Overview</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to CSS file -->
</head>
<body>
    <div class="container">
        <h2>Financial Overview</h2>
        <p>Total Income: $<?php echo number_format($totalIncome, 2); ?></p>
        <p>Total Expenses: $<?php echo number_format($totalExpenses, 2); ?></p>
        <p>Balance: $<?php echo number_format($balance, 2); ?></p>
        <p>Highest Expense: <?php echo $maxExpenseCategory; ?> ($<?php echo number_format($maxExpenseAmount, 2); ?>)</p>
        
        <canvas id="expenseChart"></canvas> <!-- Chart goes here -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Data from PHP
        const expenseCategories = <?php echo $expenseCategoriesJson; ?>;
        const expenseTotals = <?php echo $expenseTotalsJson; ?>;

        // Create chart
        const ctx = document.getElementById('expenseChart').getContext('2d');
        const expenseChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: expenseCategories,
                datasets: [{
                    label: 'Expenses by Category',
                    data: expenseTotals,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>

<?php
// Close the connection
$conn->close();
?>
