<?php include 'conn.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@200&family=Lato&family=Montserrat:wght@300&family=Raleway:wght@100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/dd15113c98.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">

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
    <div class="alert alert-success" id="successAlert" role="alert" style="display: none;">
        Record succeessfully edited.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <div class="alert alert-danger" role="alert" id="errorAlert" style="display: none;">
    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ff0000}</style><path d="M256 32c14.2 0 27.3 7.5 34.5 19.8l216 368c7.3 12.4 7.3 27.7 .2 40.1S486.3 480 472 480H40c-14.3 0-27.6-7.7-34.7-20.1s-7-27.8 .2-40.1l216-368C228.7 39.5 241.8 32 256 32zm0 128c-13.3 0-24 10.7-24 24V296c0 13.3 10.7 24 24 24s24-10.7 24-24V184c0-13.3-10.7-24-24-24zm32 224a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"/></svg>
         <b>Error!</b>
    </div>
    <h1 style="font-family:'Exo 2'; text-align: center;" style="margin-bottom: 85px;">Employee Records</h1>
    <div class="container mt-4" style="margin-bottom: 6%;">
        <table id="employeeData" class="table table-dark table-bordered table-striped table-hover">
            <thead class="table-primary table-dark">
                <tr>
                    <th>Employee ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Date of Hiring</th>
                    <th>Job ID</th>
                    <th>Salary</th>
                    <th>Manager ID</th>
                    <th>Department ID</th>
                </tr>
            </thead>
            <tbody>
                <!--Add as many rows here as needed (THIS WILL BE DONE DYNAMICALLY VIA PHP)-->
                <?php
                  $stid = oci_parse($conn, 'SELECT employee_id, first_name, last_name, email, phone_number, hire_date, job_id, salary, manager_id, department_id FROM hr_employees ORDER BY employee_id DESC');
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
          const successAlert = $('#successAlert');
          const errorAlert = $('#errorAlert');
          const previousErrorResponse = $('#errorReponseText');
          // Reset alert
          successAlert.hide();
          errorAlert.hide();
          previousErrorResponse.remove();

          $.ajax({
            type: 'POST',
            url: 'update_employees.php',
            data: `email=${$(this).html()}&empid=${$(this).attr('empid')}`,
            success: function(response){
              console.log("success");
              successAlert.show();
            },
            error: function(response){
              console.log("failed");
              errorAlert.append("<div id='errorReponseText'>" + response.responseText + "</div>");
              errorAlert.show();
            }
          });
        });

        $("[contenteditable=true][name=phone]").blur(function (event) {
          const successAlert = $('#successAlert');
          const errorAlert = $('#errorAlert');
          const previousErrorResponse = $('#errorReponseText');
          // Reset alert
          successAlert.hide();
          errorAlert.hide();
          previousErrorResponse.remove();

          $.ajax({
            type: 'POST',
            url: 'update_employees.php',
            data: `phone=${$(this).html()}&empid=${$(this).attr('empid')}`,
            success: function(response){
              console.log("success");
              successAlert.show();
            },
            error: function(response){
              console.log("failed");
              errorAlert.append("<div id='errorReponseText'>" + response.responseText + "</div>");
              errorAlert.show();
            }
          });
        });

        $("[contenteditable=true][name=salary]").blur(function (event) {
          const successAlert = $('#successAlert');
          const errorAlert = $('#errorAlert');
          const previousErrorResponse = $('#errorReponseText');
          // Reset alert
          successAlert.hide();
          errorAlert.hide();
          previousErrorResponse.remove();

          $.ajax({
            type: 'POST',
            url: 'update_employees.php',
            data: `salary=${$(this).html()}&empid=${$(this).attr('empid')}`,
            success: function(response){
              console.log("success");
              successAlert.show();
            },
            error: function(response){
              console.log("failed");
              errorAlert.append("<div id='errorReponseText'>" + response.responseText + "</div>");
              errorAlert.show();
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
