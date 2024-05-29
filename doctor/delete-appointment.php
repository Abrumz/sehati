<?php
session_start();

if(isset($_SESSION["user"])){
    if(($_SESSION["user"])=="" or $_SESSION['usertype']!='a'){
        header("location: ../login.php");
    }

}else{
    header("location: ../login.php");
}
    include("../connection.php");
    include("../doc.php");

    $email = $_SESSION['user'];
    $userType = 'a'; 
    $doctorName = ''; 
    $spec = ''; 
    $phoneNumber = ''; 
    $nik = ''; 
    $password = ''; 
    $doctorId = ''; 

    // Buat objek Doctor
    $doctor = new Doctor($email, $userType, $doctorName, $spec, $phoneNumber, $nik, $password, $doctorId);

    if (isset($_GET["id"])) {
        $appoid = $_GET["id"];
        // Memanggil metode deleteAppointment dari objek Doctor
        $doctor->deleteAppointment($appoid);
    
        header("location: schedule.php");
        exit(); // 
    } else {
        header("location: schedule.php");
        exit(); // 
    }

?>
