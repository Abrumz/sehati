<?php
session_start();

if(isset($_SESSION["user"])){
    if(($_SESSION["user"])=="" or $_SESSION['usertype']!='p'){
        header("location: ../login");
    }

}else{
    header("location: ../login");
}
    include("../connection.php");
    include("../pat.php");

    $email = $_SESSION['user'];
    $userType = 'a'; 
    $patientName = '';
    $phoneNumber = ''; 
    $nik = ''; 
    $dateOfBirth = '';
    $password = ''; 
    $patientId = ''; 

    // Buat objek Patient
    $patient = new Patient($email, $userType, $patientName, $phoneNumber, $dateOfBirth, $nik, $password, $patientId);

    if (isset($_GET["id"])) {
        $appoid = $_GET["id"];
        // Memanggil metode deleteAppointment dari objek Doctor
        $patient->deleteAppointment($appoid);
    
        header("location: schedule");
        exit(); // 
    } else {
        header("location: schedule");
        exit(); // 
    }

?>
