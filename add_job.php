<?php

  include 'conn.php';

  $jobID = $_POST['jobID'];
  $jobTitle = $_POST['jobTitle'];
  $minSal = intval($_POST['minSal']);
  $maxSal = intval($_POST['maxSal']);

  $stid = oci_parse($conn, 'BEGIN new_job(:jobID, :jobTitle, :minSal, :maxSal); END;');  
  oci_bind_by_name($stid, ":jobID", $jobID);
  oci_bind_by_name($stid, ":jobTitle", $jobTitle);
  oci_bind_by_name($stid, ":minSal", $minSal);
  oci_bind_by_name($stid, ":maxSal", $maxSal);

  if (!oci_execute($stid)) {
    http_response_code(400);
    echo oci_error($stid)['message'];
  }

  oci_close($conn);
?>