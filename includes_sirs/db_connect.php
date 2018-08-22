<?php
    include_once 'psl-config.php';   // As functions.php is not included
    if($mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE)){
        //echo "CONNECTED";
        
    }else{
        die("FAILED");
    }
?>