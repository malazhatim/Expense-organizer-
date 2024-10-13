<?php
            // Ensure the path to total_expenses.php is correct
            include 'total_expenses.php'; // Correct this line if necessary
            ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Entry</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-top: 10px;
            color: #555;
        }

        input[type="number"],
        input[type="text"],
        input[type="date"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 3px;
            border: 1px solid #ddd;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        #total-expenses {
            margin-top: 20px;
            text-align: center;
            font-size: 1.2em;
        }
    </style>
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
        </div>
    </div>
</body>
</html>
