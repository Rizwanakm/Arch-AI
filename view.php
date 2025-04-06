<?php
include("header.php");
?>
<main id="main" class="main">

  <div class="pagetitle" style=" margin-left:300px; display: flex; flex-direction:row; gap:450px;">

    <div class="left">
      <h1>VIEW USERS</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"> View Registration </li>
          <li class="breadcrumb-item active">Table</li>
        </ol>
      </nav>
    </div>
    <div class="right">
      <!-- Searching Techniques -->
      <!<div class="search-container" style="margin-top:20px;">
        <label for="Search">Search : </label>
        <input type="text" id="user-search" placeholder="Search for users...">
      </div>
    </div>
  </div>

  <!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-11">

        <div class="card" style="margin-left: 300px;">
          <div class="card-body">


            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                <th scope="col">Id</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Password</th>
                  <!--<th scope="col">Delete</th>-->
                </tr>
              </thead>
              <tbody>
                <?php include("config.php");

                $query = "SELECT * FROM `signup`";
                $book = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($book)) {


                ?>


                  <tr>
                  <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['password'] ?></td>



                    <?php
                   // echo "<td> <a href='deletereg.php?id=" . $row['id'] . "'><button class='btn btn-danger'>Delete</button></a></td>";
                    ?>
                  </tr>
                <?php   } ?>
              </tbody>
            </table>
            <!-- End Default Table Example -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const searchInput = document.getElementById("user-search");
      const userTableRows = document.querySelectorAll("table.table tbody tr");

      searchInput.addEventListener("input", function() {
        const query = searchInput.value.toLowerCase();

        userTableRows.forEach((row) => {
          const name = row.querySelector("td:nth-child(1)").textContent.toLowerCase();
          const email = row.querySelector("td:nth-child(2)").textContent.toLowerCase();

          if (name.includes(query) || email.includes(query)) {
            row.style.display = "table-row";
          } else {
            row.style.display = "none";
          }
        });
      });
    });
  </script>

</main>