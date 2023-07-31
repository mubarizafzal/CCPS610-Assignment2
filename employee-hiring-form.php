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

        <title>Employee Hiring Form</title>
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
        Successfully added a new employee.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <div class="alert alert-danger" role="alert" id="errorAlert" style="display: none;">
    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ff0000}</style><path d="M256 32c14.2 0 27.3 7.5 34.5 19.8l216 368c7.3 12.4 7.3 27.7 .2 40.1S486.3 480 472 480H40c-14.3 0-27.6-7.7-34.7-20.1s-7-27.8 .2-40.1l216-368C228.7 39.5 241.8 32 256 32zm0 128c-13.3 0-24 10.7-24 24V296c0 13.3 10.7 24 24 24s24-10.7 24-24V184c0-13.3-10.7-24-24-24zm32 224a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"/></svg>
         <b>Error!</b>
    </div>
    <h1 style="font-family:'Exo 2'; text-align: center; margin-bottom: 80px;">Employee Hiring Form</h1>

    <div class="container mb-4">
        <form id="hiring-form" class="row g-3">
            <div class="col-md-6">
              <label for="inputFName4" class="form-label">First Name</label>
              <input type="text" class="form-control" id="inputFName4" name="inputFName">
            </div>
            <div class="col-md-6">
              <label for="inputLName4" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="inputLName4" name="inputLName">
            </div>
            <div class="col-12">
              <label for="inputEmail" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="john_doe@example.com">
            </div>
            <div class="col-12">
              <label for="inputPhone" class="form-label">Phone Number</label>
              <input type="text" class="form-control" id="inputPhone" name="inputPhone" placeholder="1234567891">
            </div>
            <div class="col-md-6">
              <label for="inputSalary" class="form-label">Salary</label>
              <input type="text" class="form-control" id="inputSalary" name="inputSalary" placeholder="85000">
            </div>
            <div class="col-md-6">
              <label for="inputHireDate" class="form-label">Hire-Date</label>
              <input type="date" class="form-control" id="inputDate" name="inputDate">
            </div>
    
            <!-- The OPTIONS will be populated here (decide on manager names, department titles, manager titles)-->
            <div class="col-md-4" style="margin-top: 45px;">
                <label for="inputJobTitle" class="form-label">Job Title</label>
                <select id="inputJobTitle" class="form-select" name="inputJobTitle">
                    <option selected>Choose...</option>
                    <?php
                      $stid = oci_parse($conn, 'SELECT job_id FROM hr_jobs');
                      oci_execute($stid);
                      while ($row = oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS)) {
                        echo "<option>";
                        foreach ($row as $item) {
                          echo $item . " ";
                        }
                        echo "</option>";
                      }
                    ?>
                </select>
            </div>
            <div class="col-md-4" style="margin-top: 45px;">
                <label for="inputManagerTitle" class="form-label">Manager ID</label>
                <select id="inputManagerTitle" class="form-select" name="inputManagerTitle">
                    <option selected>Choose...</option>
                    <?php
                      $stid = oci_parse($conn, 'SELECT UNIQUE(manager_id) FROM hr_employees WHERE manager_id IS NOT NULL ORDER BY manager_id');
                      oci_execute($stid);
                      while ($row = oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS)) {
                        echo "<option>";
                        foreach ($row as $item) {
                          echo $item . " ";
                        }
                        echo "</option>";
                      }
                    ?>
                </select>
            </div>
            <div class="col-md-4" style="margin-top: 45px;">
                <label for="inputDepartmentTitle" class="form-label">Department Title</label>
                <select id="inputDepartmentTitle" class="form-select" name="inputDepartmentTitle">
                    <option selected>Choose...</option>
                    <?php
                      $stid = oci_parse($conn, 'SELECT UNIQUE(department_id) FROM hr_employees WHERE department_id IS NOT NULL ORDER BY department_id');
                      oci_execute($stid);
                      while ($row = oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS)) {
                        echo "<option>";
                        foreach ($row as $item) {
                          echo $item . " ";
                        }
                        echo "</option>";
                      }
                    ?>
                </select>
            </div>
            <div class="col-12" style="text-align: center;">
              <button type="submit" form="hiring-form" class="btn btn-outline-dark btn-lg">Hiring</button>
            </div>
        </form>
    </div>

    <!--JS for setting sysdate as default date-->
    <script src="jquery.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('inputDate').value = new Date().toDateInputValue();
        });

        Date.prototype.toDateInputValue = function() {
            const year = this.getFullYear();
            const month = String(this.getMonth() + 1).padStart(2, '0');
            const day = String(this.getDate()).padStart(2, '0');
            return `${year}-${month}-${day}`;
        };

        $('#hiring-form').submit(function(e){
          e.preventDefault();
          var product = $(this).serialize();
          console.log(product);

          const successAlert = $('#successAlert');
          const errorAlert = $('#errorAlert');
          const previousErrorResponse = $('#errorReponseText');
          // Reset alert
          successAlert.hide();
          errorAlert.hide();
          previousErrorResponse.remove();

          $.ajax({
            type: 'POST',
            url: 'hire_employee.php',
            data: product,
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