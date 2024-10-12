<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section text-center text-light d-flex align-items-center justify-content-center">
        <div class="container">
            <h1 class="display-4">Welcome to income page</h1>
            <p class="lead">We offer the best services to help you manage your income</p>
            <a href="#" class="btn btn-primary btn-lg mt-3">Start</a>
        </div>
    </section>

    <!-- Content Section -->
    <section class="content-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Income</h5>
                            <p class="card-text">Description of Income.</p>
                            <a href="inco.php" class="btn btn-primary">Start</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Total Income</h5>
                            <p class="card-text">Description of Total Income.</p>
                            <a href="total_income.php" class="btn btn-primary">Start</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Expense</h5>
                            <p class="card-text">Description of Expense.</p>
                            <a href="exp.php" class="btn btn-primary">Start</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Total Expense</h5>
                            <p class="card-text">Description of Total Expense.</p>
                            <a href="total_expenses.php" class="btn btn-primary">Start</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Overview</h5>
                            <p class="card-text">Description of Overview.</p>
                            <a href="all.php" class="btn btn-primary">Start</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-light text-center py-3">
        <p class="mb-0">© 2024 My Website. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap and jQuery JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
