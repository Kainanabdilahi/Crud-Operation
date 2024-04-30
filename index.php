<?php

  include("conn.php");

  // count num_rows

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
        <a href="./add.php" class="btn btn-success"><i class="bi bi-person-fill-add"></i> Add Employee </a>
        <a href="./list.php" class="btn btn-info"><i class="bi bi-card-checklist"></i> <?php echo $rowCount ?> Employee </a>
      </div>
      </div>
      <table class="table table-hover">
        <thead class="bg-dark text-white">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Salary</th>
            <th class="text-center">Action</th>
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
            <td><?php echo "$" . $row['salary']?></td>
            <td class="text-center">
              <a href="./edit.php?id=<?php echo $row['id']?>&name=<?php echo $row['name']?>&address=<?php echo $row['address']?>&salary=<?php echo $row['salary']?>" class="btn btn-primary"><i class="bi bi-pencil-square p-3"></i></a>
              <a href="./operation.php?id=<?php echo $row['id']?>" class="btn btn-danger"><i class="bi bi-trash p-3"></i></a>
            </td>
            <?php } // End of while loop?>
            <tr>
            <td class="bg-dark text-white"><?php echo "" ?></td>
            <td class="bg-dark text-white"><?php echo "@CompanyName" ?></td>
            <td class="bg-dark text-white"><?php echo "" ?></td>
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
