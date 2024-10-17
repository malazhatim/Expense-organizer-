<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Income & Expense</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Overview Website</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="dash.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
            <li class="nav-item"><a class="nav-link" href="service.php">Services</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="#income">Income</a></li>
            <li class="nav-item"><a class="nav-link" href="#expense">Expense</a></li>
        </ul>
    </div>
</nav>

<!-- Header Section -->
<header class="bg-primary text-white text-center py-5">
    <h1>Income & Expense Services</h1>
    <p class="lead">Your one-stop solution for tracking and managing finances.</p>
</header>

<!-- Income Section -->
<section id="income" class="py-5">
    <div class="container">
        <h2 class="text-center">Income Services</h2>
        <p class="text-center">Track all your sources of income effectively.</p>
        <div class="row mt-4">
            <div class="col-md-6">
                <img src="back.png" alt="Income Image" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <h3>Manage Your Income</h3>
                <p>Our income tracking services help you keep a clear view of all your earnings, whether it's from sales, services, or any other sources. Let us help you maximize your income potential.</p>
            </div>
        </div>
    </div>
</section>

<!-- Expense Section -->
<section id="expense" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center">Expense Services</h2>
        <p class="text-center">Stay on top of your spending with our expense management tools.</p>
        <div class="row mt-4">
            <div class="col-md-6 order-md-2">
                <img src="back.png" alt="Expense Image" class="img-fluid rounded">
            </div>
            <div class="col-md-6 order-md-1">
                <h3>Track Your Expenses</h3>
                <p>Our expense management services provide a complete overview of all your spending. Categorize expenses, analyze spending patterns, and take control of your finances.</p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 My Services. All Rights Reserved.</p>
</footer>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
