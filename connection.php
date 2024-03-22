<?php

    // $database= new mysqli("localhost","ilkomerz_sehati","23Gusendra16","ilkomerz_sehati");
    $database= new mysqli("localhost","root","","sehati");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>
