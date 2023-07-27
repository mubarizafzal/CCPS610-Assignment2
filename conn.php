<?php     
$conn = oci_connect("m8afzal", "11167653", "//oracle12c.scs.ryerson.ca:1521/orcl12c");

if (!$conn) {
    $msg = oci_error();
    echo $msg['message'], "\n";
    exit;
}

?>