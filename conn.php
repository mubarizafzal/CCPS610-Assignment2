<?php
  $file = file_get_contents('.passfile'); // there should not be a newline at the end
  $fileData = explode(':', $file);

  $user = $fileData[0];
  $pass = $fileData[1];

  $conn = oci_connect($user, $pass, "//oracle12c.scs.ryerson.ca:1521/orcl12c");

  if (!$conn) {
      $msg = oci_error();
      echo $msg['message'], "\n";
      exit;
  }
?>