<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
    <title>Home</title>
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
        font-family: "Quicksand", sans-serif;
        margin: 0;
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
        width: calc(100% - 250px);
      }
      h1 {
        font-size: 2.5rem;
        color: #333;
      }
      textarea {
        width: 100%;
        height: 150px;
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 10px;
        font-size: 1rem;
        font-family: "Quicksand", sans-serif;
        resize: none;
        margin-bottom: 15px;
      }
      .submit-btn {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-size: 1rem;
        border-radius: 4px;
        cursor: pointer;
      }
      .submit-btn:hover {
        background-color: #0056b3;
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
          <a class="nav-link" href="index.php">
            <i class="fa-solid fa-house me-2"></i>Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">
            <i class="fa-solid fa-sign-in-alt me-2"></i>Log In
          </a>
        </li>
        
       
        
      </ul>
    </nav>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <style>
        body {
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .signup-container {
            background:#f4f4f4;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 700px;
            text-align: center;
        }
        .signup-container h2 {
            text-align: center;
        }
        .signup-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .signup-container button {
            width: 100%;
            padding: 10px;
            background:rgb(99, 137, 225);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .signup-container button:hover {
            background: #218838;
        }
        .login-link {
            margin-top: 10px;
            display: block;
        }
    </style>
</head>
<body>
    <div class="signup-container">
    <form method="post" action="signupact.php">
        <h2>Sign Up</h2>
        <form id="signupForm">
            <input type="text" id="username" placeholder="Username" name="name" required>
            <input type="email" id="email" placeholder="Email" name="email"required>
            <input type="password" id="password" placeholder="Password" name="password" required>
            <button type="submit" name="submit">Sign Up</button>
        </form>
        <label>Already have an account?</label>
        <a href="login.php" class="login-link"> Login here</a>
    </form>
    </div>

    <script>
        document.getElementById('signupForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const username = document.getElementById('username').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            
            if (username && email && password) {
                alert('Signup successful!');
                window.location.href = 'login.php';
            } else {
                alert('Please fill in all fields.');
            }
        });
    </script>
</body>
</html>