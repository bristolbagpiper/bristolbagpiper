<?php

$conn = new mysqli('localhost', 'asmart_test', 'asmart_testo', 'asmart_testo');

 

if ($conn->connect_error) {

    die('Connect Error (' . $conn->connect_errno . ') '

            . $conn->connect_error);

}

 

echo 'Success... ' . $conn->host_info . "\n";

 

$conn->close();

?>
