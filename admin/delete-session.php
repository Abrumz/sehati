<?php
    //import database
    include("../connection.php");
    include("../adm.php");

    session_start();

    // Pastikan pengguna telah login dan memiliki hak akses sebagai admin
    if (!isset($_SESSION["user"]) || $_SESSION["user"] == "" || $_SESSION['usertype'] != 'a') {
        header("location: ../login.php");
        exit(); // Pastikan untuk keluar setelah melakukan redirect
    }

    // Membuat objek Admin
    $admin = new Admin($email, $userType, $adminEmail, $adminName, $apassword, $database);

    // Memeriksa apakah ada ID yang diberikan melalui parameter GET
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        // Memanggil metode deleteSchedule dari objek Admin
        $admin->deleteSchedule($id);
        header("location: schedule.php");
        exit(); // Pastikan untuk keluar setelah melakukan redirect
    } else {
        // Handle jika tidak ada ID yang diberikan
        // Misalnya, Anda dapat mengarahkan pengguna kembali ke halaman sebelumnya
        header("location: schedule.php");
        exit(); // Pastikan untuk keluar setelah melakukan redirect
    }
?>
