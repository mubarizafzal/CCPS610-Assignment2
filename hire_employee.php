<?php

  include 'conn.php';

  $fName = $_POST['inputFName'];
  $lName = $_POST['inputLName'];
  $email = $_POST['inputEmail'];
  $phone = intval($_POST['inputPhone']);
  $salary = intval($_POST['inputSalary']);
  $date = date("d-M-Y", strtotime($_POST['inputDate']));
  $jobTitle = $_POST['inputJobTitle'];
  $managerID = intval($_POST['inputManagerTitle']);
  $departmentID = intval($_POST['inputDepartmentTitle']);

  
  $stid = oci_parse($conn, 'BEGIN Employee_hire_sp(:fName, :lName, :email, :salary, :date, :phone, :jobTitle, :managerID, :departmentID); END;');  
  oci_bind_by_name($stid, ":fName", $fName);
  oci_bind_by_name($stid, ":lName", $lName);
  oci_bind_by_name($stid, ":email", $email);
  oci_bind_by_name($stid, ":phone", $phone);
  oci_bind_by_name($stid, ":jobTitle", $jobTitle);
  oci_bind_by_name($stid, ":managerID", $managerID);
  oci_bind_by_name($stid, ":departmentID", $departmentID);
  oci_bind_by_name($stid, ":date", $date);
  oci_bind_by_name($stid, ":salary", $salary);

  if (!oci_execute($stid)) {
    http_response_code(400);
    echo oci_error($stid)['message'];
  }

  oci_close($conn);
?>