<?php

  include 'conn.php';

  $empid = $_POST['empid'];

  if (!empty($_POST['email'])) {
    $email = $_POST['email'];
    $stid = oci_parse($conn, 'UPDATE hr_employees SET email = :email WHERE employee_id = :empid');  
    oci_bind_by_name($stid, ":email", $email);  
    oci_bind_by_name($stid, ":empid", $empid);
    
    if (!oci_execute($stid)) {
      http_response_code(400);
      echo oci_error($stid)['message'];
    }  
  }

  if (!empty($_POST['phone'])) {
    $phone = $_POST['phone'];
    $stid = oci_parse($conn, 'UPDATE hr_employees SET phone_number = :phone WHERE employee_id = :empid');  
    oci_bind_by_name($stid, ":phone", $phone);  
    oci_bind_by_name($stid, ":empid", $empid);

    if (!oci_execute($stid)) {
      http_response_code(400);
      echo oci_error($stid)['message'];
    }  
  }

  if (!empty($_POST['salary'])) {
    $salary = $_POST['salary'];
    $stid = oci_parse($conn, 'UPDATE hr_employees SET salary = :salary WHERE employee_id = :empid');  
    oci_bind_by_name($stid, ":salary", $salary);  
    oci_bind_by_name($stid, ":empid", $empid);

    if (!oci_execute($stid)) {
      http_response_code(400);
      echo oci_error($stid)['message'];
    }  
  }

  oci_close($conn);  
?>