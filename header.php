<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
    <title>Vertical Navbar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/all.min.css" />
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <style>
      body {
        display: flex;
        min-height: 100vh;
      }
      .vertical-nav {
        width: 250px;
        background-color: #a8d3fd;
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        overflow-y: auto;
        border-right: 1px solid #ddd;
      }
      .vertical-nav .nav-link {
        color: #333;
        font-size: 1.1rem;
        padding: 15px;
      }
      .vertical-nav .nav-link:hover {
        background-color: #ddd;
      }
      .main-content {
        margin-left: 250px;
        padding: 20px;
        width: 100%;
      }
    </style>
  </head>
  <body>
    <nav class="vertical-nav">
      <div class="navbar-brand text-center py-3">
        <h4 class="mb-0">ArcWebz</h4>
      </div>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link" href="login.php">
            <i class="fa-solid fa-sign-in-alt me-2"></i>Log In
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signup.php">
            <i class="fa-solid fa-user-plus me-2"></i>Sign Up
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="askme.php">
            <i class="fa-solid fa-question-circle me-2"></i>Ask Me
          </a>
        </li>
    
      </ul>
    </nav>