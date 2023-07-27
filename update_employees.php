<?php

include 'conn.php';

  $empid = $_POST['empid'];

  if (!empty($_POST['email'])) {
    $email = $_POST['email'];
    $stid = oci_parse($conn, 'UPDATE hr_employees SET email = :email WHERE employee_id = :empid');  
    oci_bind_by_name($stid, ":email", $email);  
    oci_bind_by_name($stid, ":empid", $empid);
    oci_execute($stid);
  }

  if (!empty($_POST['phone'])) {
    $phone = $_POST['phone'];
    $stid = oci_parse($conn, 'UPDATE hr_employees SET phone_number = :phone WHERE employee_id = :empid');  
    oci_bind_by_name($stid, ":phone", $phone);  
    oci_bind_by_name($stid, ":empid", $empid);
    oci_execute($stid);

  }

  if (!empty($_POST['salary'])) {
    $salary = $_POST['salary'];
    $stid = oci_parse($conn, 'UPDATE hr_employees SET salary = :salary WHERE employee_id = :empid');  
    oci_bind_by_name($stid, ":salary", $salary);  
    oci_bind_by_name($stid, ":empid", $empid);
    oci_execute($stid);

  }

  /*
  $lName = $_POST['inputLName'];
  $fName = $_POST['inputFName'];
  $phone = intval($_POST['inputPhone']);
  $salary = intval($_POST['inputSalary']);
  $date = date("d-M-Y", strtotime($_POST['inputDate']));
  $jobTitle = $_POST['inputJobTitle'];
  $managerID = intval($_POST['inputManagerTitle']);
  $departmentID = intval($_POST['inputDepartmentTitle']);

  
  oci_bind_by_name($stid, ":phone", $phone);
  oci_bind_by_name($stid, ":jobTitle", $jobTitle);
  oci_bind_by_name($stid, ":managerID", $managerID);
  oci_bind_by_name($stid, ":departmentID", $departmentID);
  oci_bind_by_name($stid, ":date", $date);
  oci_bind_by_name($stid, ":salary", $salary);


  */
  oci_close($conn);
  
?>