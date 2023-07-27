<?php

include 'conn.php';

  $jobid = $_POST['jobid'];

  if (!empty($_POST['jobTitle'])) {
    $jobTitle = $_POST['jobTitle'];
    $stid = oci_parse($conn, 'UPDATE hr_jobs SET job_title = :jobTitle WHERE job_id = :jobid');  
    oci_bind_by_name($stid, ":jobTitle", $jobTitle);  
    oci_bind_by_name($stid, ":jobid", $jobid);
    oci_execute($stid);
  }

  if (!empty($_POST['minSal'])) {
    $minSal = $_POST['minSal'];
    $stid = oci_parse($conn, 'UPDATE hr_jobs SET min_salary = :minSal WHERE job_id = :jobid');  
    oci_bind_by_name($stid, ":minSal", $minSal);  
    oci_bind_by_name($stid, ":jobid", $jobid);
    oci_execute($stid);

  }

  if (!empty($_POST['maxSal'])) {
    $maxSal = $_POST['maxSal'];
    $stid = oci_parse($conn, 'UPDATE hr_jobs SET max_salary = :maxSal WHERE job_id = :jobid');  
    oci_bind_by_name($stid, ":maxSal", $maxSal);  
    oci_bind_by_name($stid, ":jobid", $jobid);
    oci_execute($stid);

  }




?>