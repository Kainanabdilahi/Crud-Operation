<?php

  include("conn.php");

  $query = "SELECT * FROM employee";
  $result = mysqli_query($conn, $query);
  $rowCount = mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Employee List</title>
    <link rel="stylesheet" href="/bootstrap5/css/bootstrap.min.css" />
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body>
    <div class="container mt-3">
      <div class="box bg-dark p-3 text-white d-flex justify-content-between align-items-center mb-3">
      <h1 class="">Employee List</h1>
      <div class="sub-box">
        <a href="#" class="btn btn-primary"><i class="bi bi-people-fill"></i><?php echo " " . $rowCount ?></a>
        <a href="./index.php" class="btn btn-danger"><i class=""></i> Go back </a>
      </div>
      </div>
      <table class="table table-hover ">
        <thead class="bg-dark text-white">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th class="text-center">Salary</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $query = "SELECT * FROM employee";
          $result = mysqli_query($conn, $query);
          $rowCount = mysqli_num_rows($result);

          // Start while loop
          while ($row = mysqli_fetch_assoc($result)) {

            ?>
          <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['address']?></td>
            <td class="text-center"><?php echo "$" . $row['salary']?></td>
            <?php } // End of while loop?>
            <tr>
            <td class="bg-dark text-white"><?php echo "" ?></td>
            <td class="bg-dark text-white"><?php echo "@CompanyName" ?></td>
            <td class="bg-dark text-white"><?php echo "" ?></td>
            <td class="bg-dark text-white"><?php echo "@CurrentYear 2024" ?></td>

            </tr>
          </tr>
            
        </tbody>
      </table>
    </div>
    <script src="/bootstrap5/js/bootstrap.min.js"></script>
  </body>
</html>
