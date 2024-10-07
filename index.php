<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Income Registration</title>
</head>
<body>
    <h2>Register Your Income</h2>
    <form action="submit_income.php" method="post">
        <label for="income_type">Income Type input:</label>
        <select id="income_type" name="income_type" required>
            <option value="">Select Income Type</option>
            <option value="Salary">Salary</option>
            <option value="Rent">Rent</option>
            <option value="Other">Other</option>
        </select>
        
        <br><br>
        
        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" step="0.01" required>
        
        <br><br>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>
