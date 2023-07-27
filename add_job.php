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

  oci_execute($stid);

  oci_close($conn);
?>