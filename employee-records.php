<?php include 'conn.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@200&family=Lato&family=Montserrat:wght@300&family=Raleway:wght@100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/dd15113c98.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <title>Employee Records</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-dark shadow p-3 mb-5" style="background-color: black;">
        <div class="container-fluid">
            <!-- Navbar Brand -->
            <a class="navbar-brand" href="index.php" style="font-size: 24px;"><strong><span style="color: greenyellow;">H</span>uman <span style="color:greenyellow">R</span>esources Portal</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
           <!-- Navbar links with dropdown and submenus -->
            <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 50%">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <button class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="dropdown">
                            Employee
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="employee-hiring-form.php">Employee Hiring Form</a></li>
                            <li><a class="dropdown-item" href="employee-records.php">Update Employee Records</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="dropdown" style="color: white;">
                            Jobs
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="identify-jd.php">Identify Job Description</a></li>
                            <li><a class="dropdown-item" href="update-jd.php">Update Job Description</a></li>
                            <li><a class="dropdown-item" href="new-job.php">Create New Job</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="dropdown" style="color: white;">
                            Department
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="">Service 1</a></li>
                            <li><a class="dropdown-item" href="">Service 2</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h1 style="font-family:'Exo 2'; text-align: center;" style="margin-bottom: 85px;">Employee Records</h1>
    <div class="container mt-4" style="margin-bottom: 6%;">
        <table id="employeeData" class="table table-dark table-bordered table-striped table-hover">
            <thead class="table-primary table-dark">
                <tr>
                    <th>employee_id</th>
                    <th>first_name</th>
                    <th>last_name</th>
                    <th>email</th>
                    <th>phone_number</th>
                    <th>hire_date</th>
                    <th>job_id</th>
                    <th>salary</th>
                    <th>manager_id</th>
                    <th>department_id</th>
                </tr>
            </thead>
            <tbody>
                <!--Add as many rows here as needed (THIS WILL BE DONE DYNAMICALLY VIA PHP)-->
                <?php
                  $stid = oci_parse($conn, 'SELECT employee_id, first_name, last_name, email, phone_number, hire_date, job_id, salary, manager_id, department_id FROM hr_employees');
                  oci_execute($stid);
                  while ($row = oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS)) {
                    echo "<tr>";
                    echo "<td>" . $row['EMPLOYEE_ID'] . "</td>";
                    echo "<td>" . $row['FIRST_NAME'] . "</td>";
                    echo "<td>" . $row['LAST_NAME'] . "</td>";
                    echo "<td contenteditable='true' name='email' empid='" . $row['EMPLOYEE_ID'] . "'>" . $row['EMAIL'] . "</td>";
                    echo "<td contenteditable='true' name='phone' empid='" . $row['EMPLOYEE_ID'] . "'>" . $row['PHONE_NUMBER'] . "</td>";
                    echo "<td>" . $row['HIRE_DATE'] . "</td>";
                    echo "<td>" . $row['JOB_ID'] . "</td>";
                    echo "<td contenteditable='true' name='salary' empid='" . $row['EMPLOYEE_ID'] . "'>" . $row['SALARY'] . "</td>";
                    echo "<td>" . $row['MANAGER_ID'] . "</td>";
                    echo "<td>" . $row['DEPARTMENT_ID'] . "</td>";
                    /*
                    foreach ($row as $item) {
                      echo "<td><div contenteditable>" . $item . "</div></td>";
                    }
                    */
                    echo "</tr>";
                  }
                ?>
            </tbody>
        </table>
    </div>
    <form class="container mb-4" id="updateEmployees">
        <div class="col-12" style="text-align: center;">
            <button type="submit" class="btn btn-outline-dark btn-lg">Update</button>
        </div>
    </form>
    
    <script src="jquery.min.js"></script>
    <script>
        $("[contenteditable=true][name=email]").blur(function (event) {
          console.log('email')
            $.ajax({
              type: 'POST',
              url: 'update_employees.php',
              data: `email=${$(this).html()}&empid=${$(this).attr('empid')}`,
              dataType: 'json',
              success: function(response){
                console.log("success");
              }
            });
          });
          $("[contenteditable=true][name=phone]").blur(function (event) {
            console.log('phone')
            $.ajax({
              type: 'POST',
              url: 'update_employees.php',
              data: `phone=${$(this).html()}&empid=${$(this).attr('empid')}`,
              dataType: 'json',
              success: function(response){
                console.log("success");
              }
            });
          });
          $("[contenteditable=true][name=salary]").blur(function (event) {
            console.log('salary')
            $.ajax({
              type: 'POST',
              url: 'update_employees.php',
              data: `salary=${$(this).html()}&empid=${$(this).attr('empid')}`,
              dataType: 'json',
              success: function(response){
                console.log("success");
              }
            });
          });
    </script>
</body>
<hr style="border-style: dotted none none; border-width: 6px; width: 75px; margin: 50px auto; border-color: orangered; background-color: white; opacity: 1;">
<footer style="background-color: black; color: white; padding: 20px; text-align: center;">
    <img src="images/tmu-logo.jpg" alt="TMU">
    <p>&copy; 2023 CCPS610. All rights reserved.</p>
    <p>Designed and developed in <span style="color: red;">&#x1f1e8;&#x1f1e6;</span> by Niloy Mubariz Ishika</a></p>
</footer>
</html>
