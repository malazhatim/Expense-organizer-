<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About - Expense Tracker</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    /* General styling */
    body {
      background-color: #f0f2f5;
      color: #333333;
      font-family: Arial, sans-serif;
    }
    h1, h2, h5 {
      color: #007bff;
    }

    /* Header styling */
    header {
      background-color: #ffffff;
      padding: 30px 0;
      margin-bottom: 20px;
      border-bottom: 2px solid #007bff;
    }
    
    /* Section title styling */
    .section-title {
      font-size: 1.8rem;
      font-weight: bold;
      color: #007bff;
      margin-bottom: 15px;
    }

    /* Content block styling */
    .content {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 8px;
      margin-bottom: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* List group styling */
    .list-group-item {
      background-color: #e9ecef;
      border: none;
      color: #333333;
    }
    
    /* Footer styling */
    footer {
      background-color: #ffffff;
      color: #333333;
      padding: 20px 0;
      margin-top: 30px;
      border-top: 2px solid #007bff;
    }
    
    /* Button Styling */
    .btn-custom {
      background-color: #007bff;
      color: #ffffff;
      font-weight: bold;
    }
    .btn-custom:hover {
      background-color: #0056b3;
      color: #ffffff;
    }

    /* Navbar styling */
    .navbar {
      background-color: #007bff;
    }
    .navbar-brand, .navbar-nav .nav-link {
      color: #ffffff !important;
    }
    .navbar-nav .nav-link:hover {
      color: #cce5ff !important;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
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
    </ul>
  </div>
</nav>

<!-- Main Content -->
<div class="container">
  
  <!-- Project Overview Section -->
  <div class="content">
    <h2 class="section-title">Project Overview</h2>
    <p>The Expense Tracker Web Application is designed to provide users with an intuitive and efficient way to manage personal finances. With a robust tech stack, users can add, view, and analyze income and expenses, gaining insights through graphical summaries of their financial health.</p>
  </div>
  
  <!-- Tech Stack Section -->
  <div class="content">
    <h2 class="section-title">Tech Stack</h2>
    <ul class="list-group">
      <li class="list-group-item"><strong>Frontend:</strong> HTML, CSS, JavaScript, Bootstrap</li>
      <li class="list-group-item"><strong>Backend:</strong> PHP</li>
      <li class="list-group-item"><strong>Database:</strong> MySQL</li>
    </ul>
  </div>
  
  <!-- Key Features Section -->
  <div class="content">
    <h2 class="section-title">Key Features & Implementation</h2>
    
    <h5>Add Income and Expenses</h5>
    <p>Users can input income and expenses through a simple form. The PHP backend processes and validates the data before securely storing it in a MySQL database.</p>
    
    <h5>Database Schema</h5>
    <p>Transactions are recorded in the database, categorized as income or expense, with fields for amount, description, and date. This organized structure supports efficient data management and retrieval.</p>
    
    <h5>Summary of Total Income/Expenses</h5>
    <p>The application provides a comprehensive summary of financial transactions, showing total income, expenses, and balance, with filtering options for daily, weekly, and monthly views.</p>
  </div>
</div>

<!-- Footer -->
<footer class="text-center">
  <p>&copy; 2024 Expense Tracker | All Rights Reserved</p>
</footer>

<!-- Bootstrap JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
