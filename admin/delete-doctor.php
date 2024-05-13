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
        $id=$_GET["id"];
        $result001= $database->query("SELECT * FROM doctor WHERE docid=$id;");
        $email=($result001->fetch_assoc())["docemail"];

        $sql= $database->query("DELETE FROM webuser WHERE email='$email';");
        $sql= $database->query("DELETE FROM doctor WHERE docemail='$email';");
        //print_r($email);
        header("location: doctors.php");
    }


?>