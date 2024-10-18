<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "income_db";

try {
    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }
} catch (Exception $e) {
    error_log($e->getMessage());
    die("Database connection error.");
}

// Initialize totals
$totalIncome = 0;
$totalExpenses = 0;

// Function to format currency
function formatCurrency($amount) {
    return '$' . number_format($amount, 2);
}

// Query for the total income
$incomeQuery = "SELECT SUM(amount) AS total_income FROM income";
$incomeResult = $conn->query($incomeQuery);

if ($incomeResult) {
    $incomeRow = $incomeResult->fetch_assoc();
    $totalIncome = $incomeRow['total_income'] ?? 0;
} else {
    error_log("Error retrieving total income: " . $conn->error);
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

        if ($row['total'] > $maxExpenseAmount) {
            $maxExpenseCategory = $row['category'];
            $maxExpenseAmount = $row['total'];
        }
    }
} else {
    error_log("Error retrieving total expenses: " . $conn->error);
}

// Calculate the balance
$balance = $totalIncome - $totalExpenses;
$balanceColor = $balance >= 0 ? 'text-success' : 'text-danger';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial Overview</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+5hb7peZVvjF5sRrH9kpOni3pv39C4zWq8kpL+h" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .financial-overview {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }
        .list-group-item {
            background-color: #f1f3f5;
        }
        .table-custom th {
            background-color: #6c757d;
            color: #ffffff;
        }
        .table-custom td {
            background-color: #ffffff;
        }
        .highlight {
            background-color: #ffe0e0;
            font-weight: bold;
        }
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('path-to-image.jpg') no-repeat center center/cover;
            min-height: 50vh;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .container h2 {
            color: #007bff;
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <div class="hero-section">
        <h1>Welcome to Your Financial Overview</h1>
    </div>

    <div class="container mt-5 financial-overview">
        <h2 class="text-center py-4">Financial Overview</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <ul class="list-group mb-4">
                    <li class="list-group-item">
                        <strong>Total Income: </strong> 
                        <span class="text-primary"><?php echo formatCurrency($totalIncome); ?></span>
                    </li>
                    <li class="list-group-item">
                        <strong>Total Expenses: </strong> 
                        <span class="text-danger"><?php echo formatCurrency($totalExpenses); ?></span>
                    </li>
                    <li class="list-group-item">
                        <strong>Balance: </strong> 
                        <span class="<?php echo $balanceColor; ?>">
                            <?php echo formatCurrency($balance); ?>
                        </span>
                    </li>
                    <li class="list-group-item">
                        <strong>Highest Expense: </strong> 
                        <span class="text-warning"><?php echo htmlspecialchars($maxExpenseCategory); ?></span> 
                        (<span class="text-danger"><?php echo formatCurrency($maxExpenseAmount); ?></span>)
                    </li>
                </ul>

                <!-- Table for Expenses by Category -->
                <?php if (!empty($expenseData)): ?>
                <table class="table table-bordered table-custom">
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Total Expense ($)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($expenseData as $expense): ?>
                        <tr class="<?php echo $expense['category'] === $maxExpenseCategory ? 'highlight' : ''; ?>">
                            <td><?php echo htmlspecialchars($expense['category']); ?></td>
                            <td><?php echo formatCurrency($expense['total']); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php else: ?>
                    <p class="text-center">No expense data available.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIqQVZlFHAIHxaUpRW6WHZl4X3Cj2IhEwLjjQJqAgf5/dXI6Nx4" crossorigin="anonymous"></script>
</body>
</html>

<?php
// Close the connection
$conn->close();
?>
