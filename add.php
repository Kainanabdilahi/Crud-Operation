<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Employee Form</title>
    <link rel="stylesheet" href="/bootstrap5/css/bootstrap.min.css" />
  </head>
  <body>
    <div class="container mt-3">
      <div class="row justify-content-center">
        <div class="col-sm-8">
          <h1 class="bg-dark p-3 text-white">Add Employee</h1>
          <form action="./operation.php" method="post">
            <div class="mb-3">
              <label for="employeeId" class="form-label">ID</label>
              <input type="text" class="form-control" id="employeeId" name="id" disabled placeholder="ID is Automatic ">
            </div>
            <div class="mb-3">
              <label for="employeeName" class="form-label">Name</label>
              <input type="text" class="form-control" id="employeeName" name="name" required>
            </div>
            <div class="mb-3">
              <label for="employeeAddress" class="form-label">Address</label>
              <input type="text" class="form-control" id="employeeName" name="address" required>
            </div>
            <div class="mb-3">
              <label for="employeeSalary" class="form-label">Salary</label>
              <input type="number" class="form-control" id="employeeSalary" name="salary" required>
            </div>
            <div class="mb-3 text-end">
              <button type="submit" class="btn btn-success" name="addNew">
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
