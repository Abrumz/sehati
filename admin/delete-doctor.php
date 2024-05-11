<?php

    session_start();

    if(isset($_SESSION["user"])){
        if(($_SESSION["user"])=="" or $_SESSION['usertype']!='a'){
            header("location: ../login.php");
        }

    }else{
        header("location: ../login.php");
    }
    
    
    if($_GET){
        //import database
        include("../connection.php");
        $docid=$_GET["id"];
        $result001= $database->query("SELECT * FROM doctor WHERE docid=$docid;");
        $row = $result001->fetch_assoc();
        $docemail = $row["docemail"];

        $sql= $database->query("DELETE FROM webuser WHERE email='$docemail';");
        $sql= $database->query("DELETE FROM doctor WHERE docemail='$docemail';");
        //print_r($email);
        header("location: doctors.php");
    }


?>