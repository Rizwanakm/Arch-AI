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
      .input-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
        max-width: 400px;
        margin: auto;
      }
      .input-container input {
        width: 100%;
        padding: 10px;
        font-size: 1rem;
        border: 1px solid #ccc;
        border-radius: 4px;
      }
      .submit-btn, .convert-btn {
        width: 100%;
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-size: 1rem;
        border-radius: 4px;
        cursor: pointer;
      }
      .convert-btn:disabled {
        background-color: gray;
        cursor: not-allowed;
      }
      .submit-btn:hover {
        background-color: #0056b3;
      }
      /* Loader styles */
      .loader-container {
        display: none; /* Start hidden */
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.8);
        justify-content: center;
        align-items: center;
        z-index: 9999;
      }
      .loader {
        border: 16px solid #f3f3f3;
        border-top: 16px solid #3498db;
        border-radius: 50%;
        width: 120px;
        height: 120px;
        animation: spin 2s linear infinite;
      }
      @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
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
        <li class="nav-item">
          <a class="nav-link" href="signup.php">
            <i class="fa-solid fa-user-plus me-2"></i>Sign Up
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="index.php" id="logoutBtn">
            <i class="fa-solid fa-sign-out-alt me-2"></i>Log Out
          </a>
        </li>
      </ul>
    </nav>

    <main class="main-content">
      <section class="py-5">
        <div class="container py-5">
          <div id="homeBox" class="boxContainer text-center p-3 p-md-5 rounded-2">
            <h1 class="my-5" id="userName">Welcome</h1>
            
            <div class="input-container">
              <input type="number" id="bedrooms" placeholder="Enter number of bedrooms" required />
              <input type="number" id="bathrooms" placeholder="Enter number of bathrooms" required />
              <input type="number" id="kitchen" placeholder="Enter number of kitchens" required />
              <button class="submit-btn" id="submitBtn">Submit</button>
              <img id="generatedImage" style="display: none; margin-top: 20px; width: 100%; max-width: 100%;" alt="Generated Floor Plan">
              <button id="downloadFloorPlan" class="convert-btn" style="display: none; margin-top: 10px; background-color: green; color: white; padding: 10px 20px; border-radius: 10px; border: none; cursor: pointer;">
    Download 
</button>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- Loader -->
    <div id="loaderContainer" class="loader-container">
      <div class="loader"></div>
    </div>

    <script src="./js/bootstrap.bundle.js"></script>
    <script src="./js/sweetalert.min.js"></script>
    <script>
      document.getElementById("submitBtn").addEventListener("click", function () {
        const bedrooms = document.getElementById("bedrooms").value;
        const bathrooms = document.getElementById("bathrooms").value;
        const kitchen = document.getElementById("kitchen").value;

        if (bedrooms <= 0 || bathrooms <= 0 || kitchen <= 0) {
          swal("Invalid Input", "Bedrooms, bathrooms, and kitchens must be greater than 0.", "error");
          return;
        }

        document.getElementById("loaderContainer").style.display = "flex";

        fetch("http://127.0.0.1:5000/generate", {
          method: "POST",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify({ bedrooms, bathrooms, kitchen })
        })
        .then(response => response.blob())
        .then(imageBlob => {
          const imageUrl = URL.createObjectURL(imageBlob);

          document.getElementById("loaderContainer").style.display = "none";
          const imgElement = document.getElementById("generatedImage");
          imgElement.src = imageUrl;
          imgElement.style.display = "block";

          const downloadBtn = document.getElementById("downloadFloorPlan");
          downloadBtn.style.display = "block";
          downloadBtn.onclick = () => {
            const a = document.createElement("a");
            a.href = imageUrl;
            a.download = "floor_plan.png";
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
          };
        })
        .catch(error => {
          document.getElementById("loaderContainer").style.display = "none";
          swal("Error", "An error occurred while generating the image.", "error");
        });
      });
    </script>
  </body>
</html>