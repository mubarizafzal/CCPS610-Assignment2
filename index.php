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

    <title>CCPS610-HR Platform</title>
</head>
<body style="overflow-x: hidden;">
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

    <div class="container mt-4">
        <h1 style="font-family:'Exo 2'; text-align: center;"><strong>Welcome to the Human Resources Portal</strong></h1>
        <p style="margin-top: 50px; text-align: center; ">This is an application that allows the user to perform various human resources related functionalities such as view, modify and insert employee data. <br>
            Furthermore, it allows for the requisition of jobs, as well as viewing and updating job descriptions. </p>
    </div>
    <div class="container mt-8" style="margin: 5% 25% 7% 25%">
        <div style="display: flex;">
            <div class="card" style="width: 18rem;">
                <img src="images/employee.jpg" class="card-img-top" alt="Employees" style="height: 200px;">
                <div class="card-body">
                    <h5 class="card-title" style="color: blue;">Employees</h5>
                    <p class="card-text">View employee records and quickly update employee data.</p>
                    <a href="employee-records.php" class="btn btn-primary" style="background-color: blue;">Update Employee Records</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="images/job.jpg" class="card-img-top" alt="Job Application" style="height: 200px;">
                <div class="card-body">
                    <h5 class="card-title" style="color: blue;">Jobs</h5>
                    <p class="card-text">View and update job descriptions, create new jobs!</p>
                    <a href="new-job.php" class="btn btn-primary" style="background-color: blue;">Create New Job</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="images/department.png" class="card-img-top" alt="Department" style="height: 200px;">
                <div class="card-body">
                    <h5 class="card-title" style="color: blue;">Department</h5>
                    <p class="card-text">View information across your department.</p>
                    <a href="#" class="btn btn-primary" style="background-color: blue;">Department</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h4 style="color:#393e46; text-align: center;"><em>Hear what our customers have to say!</em></h4>
        <hr style="border-style: dotted none none; border-width: 6px; width: 75px; margin: 50px auto; border-color: orangered; background-color: white; opacity: 1;">
        <blockquote style="font-size: 24px; font-weight: bold; text-align: center; color: #007bff; margin: 0;">★★★★★</blockquote>
        <p style="font-family: 'Roboto', sans-serif; font-size: 18px; text-align: justify; padding-left: 15px; margin: 20px;">
            <span style="font-size: 40px; color: orangered;">"</span>This application is a game-changer for my large organization. I've truly never expected all this functionality! I have full visibility over the human resources needs of my organization.<span style="font-size: 40px; color: orangered;">"</span>
        </p>
        <blockquote style="font-size: 24px; font-weight: bold; text-align: center; color: #007bff; margin: 0;">★★★★★</blockquote>
        <p style="font-family: 'Roboto', sans-serif; font-size: 18px; text-align: justify; padding-left: 15px; margin: 20px;">
            <span style="font-size: 40px; color: orangered;">"</span>Finally I can easily create new jobs and update job descriptions! You have no idea how many applications I have gone through before I found the Human Resources Portal.<span style="font-size: 40px; color: orangered;">"</span>
        </p>
    </div>

</body>
<hr style="border-style: dotted none none; border-width: 6px; width: 75px; margin: 50px auto; border-color: orangered; background-color: white; opacity: 1;">
<footer style="background-color: black; color: white; padding: 20px; text-align: center;">
    <img src="images/tmu-logo.jpg" alt="TMU">
    <p>&copy; 2023 CCPS610. All rights reserved.</p>
    <p>Designed and developed in <span style="color: red;">&#x1f1e8;&#x1f1e6;</span> by Niloy Mubariz Ishika</a></p>
</footer>
</html>