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

    <title>Identify Job Description</title>
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
    <h1 style="font-family:'Exo 2'; text-align: center;" style="margin-bottom: 85px;">Identify Job Description</h1>
    <?php
      if ($_GET['inputJobTitle']) {
        $jobID = $_GET['inputJobTitle'];
        echo "<div class='container'>";
        $stid = oci_parse($conn, 'SELECT get_job(:jobID) FROM dual');
        oci_bind_by_name($stid, ":jobID", $jobID); 
        oci_execute($stid);
        while ($row = oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS)) {
          echo "<b>Job Description: </b>";
          foreach ($row as $item) {
            echo $item;
          }
        }
        echo "</div>";
      }
    ?>
    <form id="getDescForm" class="container mt-4">
        <div class="mb-3">
            <label for="inputJobID" class="form-label">Enter Job ID</label>
            <select id="inputJobTitle" class="form-select" name="inputJobTitle">
              <option selected><?php
                if (!empty($_GET["inputJobTitle"])) {
                  echo $_GET["inputJobTitle"];
                } else {
                  echo "Choosing ...";
                }
              ?></option>
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
          <div class="col-12" style="text-align: center;">
            <button type="submit" class="btn btn-outline-dark btn-lg">Submit</button>
        </div>
    </form>
    <script src="jquery.min.js"></script>
    <script>
    </script>
</body>
<hr style="border-style: dotted none none; border-width: 6px; width: 75px; margin: 50px auto; border-color: orangered; background-color: white; opacity: 1;">
<footer style="background-color: black; color: white; padding: 20px; text-align: center;">
    <img src="images/tmu-logo.jpg" alt="TMU">
    <p>&copy; 2023 CCPS610. All rights reserved.</p>
    <p>Designed and developed in <span style="color: red;">&#x1f1e8;&#x1f1e6;</span> by Niloy Mubariz Ishika</a></p>
</footer>
</html>