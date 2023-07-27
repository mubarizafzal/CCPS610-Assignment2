<?php     
$conn = oci_connect("m8afzal", "11167653", "//oracle12c.scs.ryerson.ca:1521/orcl12c");

if (!$conn) {
    $msg = oci_error();
    echo $msg['message'], "\n";
    exit;
} else {
    print "Successfully connected to Oracle database.\n";
}

//oci_close($conn);
?>