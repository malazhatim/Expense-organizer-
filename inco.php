<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Income Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        label {
            display: block;
            margin-top: 10px;
            color: #555;
        }

        select, input[type="number"], button {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 3px;
            border: 1px solid #ddd;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 15px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="submit_income.php" method="post">
        <h2>Register Your Income</h2>

        <label for="income_type">Income Type:</label>
        <select id="income_type" name="income_type" required>
            <option value="">Select Income Type</option>
            <option value="Salary">Salary</option>
            <option value="Rent">Rent</option>
            <option value="Other">Other</option>
        </select>
        
        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" step="0.01" required>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>

