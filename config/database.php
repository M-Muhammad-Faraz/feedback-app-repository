<?php
define("DB_HOST","localhost");
define("DB_USER","faraz");
define("DB_PASS","123456");
define("DB_NAME","feedbacksdb");


$conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if($conn->connect_error){
    echo 'CONNECTION FAILED'.$conn->connect_error;
}
?>
