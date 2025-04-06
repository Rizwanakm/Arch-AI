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
        
        padding: 20px;
        width: 100%;
      }
      .btn-custom {
    font-size: 1.2rem;
    padding: 12px 24px;
    margin: 10px;
    transition: background-color 0.2s ease-in-out, transform 0.2s ease-in-out;
  }
  .btn-login {
    background-color: #007bff;
    color: white;
  }
  .btn-signup {
    background-color: #28a745;
    color: white;
  }
  .btn-login:hover {
    background-color: #0056b3;
    transform: scale(1.05);
  }
  .btn-signup:hover {
    background-color: #218838;
    transform: scale(1.05);
  }
    </style>
  </head>
  <body>
    

    <main class="main-content">
      <section class="py-5">
        <div class="container text-center py-5">
          <h1>Welcome to ArcWebz</h1>
          <p class="lead mt-3">"Your vision, our blueprint – transforming your requirements into architectural brilliance with the power of AI.".</p>
          <div class="btn-container">
            <a href="login.php" class="btn btn-custom btn-login">Log In</a>
          <a href="signup.php" class="btn btn-custom btn-signup">Sign Up</a>
          </div>
          
        </div>
      </section>
    </main>

    <script src="./js/bootstrap.bundle.js"></script>
    <script src="./js/sweetalert.min.js"></script>
    <script>
      document.getElementById('logoutBtn').addEventListener('click', () => {
        swal("Logged out successfully!", "", "success");
      });
    </script>
  </body>
</html>