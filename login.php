<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
    <title>Log in</title>
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
          <a class="nav-link" href="index.php">
            <i class="fa-solid fa-house me-2"></i>Home
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="signup.php">
            <i class="fa-solid fa-user-plus me-2"></i>Sign Up
          </a>
        </li>
      
        
      </ul>
    </nav>

    <main class="py-5 main-content">
      <section class="py-5">
        <div class="container">
        <form action="loginact.php" method="POST">
          <div
            id="loginBox"
            class="boxContainer text-center p-3 p-md-5 rounded-2"
          >
            <h1 class="my-5">Smart Login System</h1>
            <div class="inputsForm">
              <input
                type="email"
                name="email"
                id="loginEmail"
                class="form-control"
                placeholder="Enter your email"
                required
              />
              <input
                type="password"
                id="loginPassword"
                name="password"
                class="form-control mt-3"
                placeholder="Enter your password"
                required
              />
              <button id="loginBtn" name="submit" class="btn btn-main my-4 w-100">
                Log in
              </button>
              <p>Don't have an account? <a href="signup.php">Sign up</a></p>
    </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <script src="./js/bootstrap.bundle.js"></script>
    <script src="./js/sweetalert.min.js"></script>
    <script src="./js/main.js"></script>
  </body>
</html>