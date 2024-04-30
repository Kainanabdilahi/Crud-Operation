<?php

include("conn.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Employee Form</title>
    <link rel="stylesheet" href="/bootstrap5/css/bootstrap.min.css" />
  </head>
  <body>
    <?php
    
    // check if there data

    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $name = $_GET["name"];
        $address = $_GET["address"];
        $salary = $_GET["salary"];
      }else{
        $id = "";
        $name = "";
        $address = "";
        $sallary = "";
      }
    

    ?>


    <div class="container mt-3">
      <div class="row justify-content-center">
        <div class="col-sm-8">
          <h1 class="bg-dark p-3 text-white">Add Employee</h1>
          <form action="./operation.php" method="post">
            <div class="mb-3">
              <label for="employeeId" class="form-label">ID</label>
              <input type="text" class="form-control" id="employeeName" name="id" value="<?php echo $id?>" readonly>
            </div>
            <div class="mb-3">
              <label for="employeeName" class="form-label">Name</label>
              <input type="text" class="form-control" id="employeeName" name="name" required value="<?php echo $name?>">
            </div>
            <div class="mb-3">
              <label for="employeeAddress" class="form-label">Address</label>
              <input type="text" class="form-control" id="employeeName" name="address" required value="<?php echo $address?>">
            </div>
            <div class="mb-3">
              <label for="employeeSalary" class="form-label">Salary</label>
              <input type="number" class="form-control" id="employeeSalary" name="salary" required value="<?php echo $salary?>">
            </div>
            <div class="mb-3 text-end">
              <button type="submit" class="btn btn-success" name="update">
                Save info
              </button>
              
              <a href="./index.php" class="btn btn-danger">Cencel</a>
              
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="/bootstrap5/js/bootstrap.min.js"></script>
  </body>
</html>
