<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Entry</title>
    <link rel="stylesheet" href="styles.css"> <!-- Optional: Link to your CSS file -->
</head>
<body>
    <div class="container">
        <h1>Enter Expense</h1>
        <form action="add_expense.php" method="POST">
            <label for="amount">Amount ($):</label>
            <input type="number" id="amount" name="amount" step="0.01" required>

            <label for="description">Description:</label>
            <input type="text" id="description" name="description" required>

            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>

            <input type="submit" value="Add Expense">
        </form>

        <h2>Total Expenses</h2>
        <div id="total-expenses">
            <?php
            // Ensure the path to total_expenses.php is correct
            include 'total_expenses.php'; // Correct this line if necessary
            ?>
        </div>
    </div>
</body>
</html>
