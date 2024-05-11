<?php
    include("../connection.php");
    
    // Memastikan id yang mau dihapus tersedia
    if(isset($_GET['id'])) {
        $scheduleid = $_GET['id'];

        // Penghapusan sesuai id 
        $delete_query = "DELETE FROM schedule WHERE scheduleid = $scheduleid";
        $result = $database->query($delete_query);

        if($result) {
            // Jika penghapusan berhasil, redirect kembali ke halaman schedule.php
            header("Location: schedule.php");
            exit();
        } else {
            // Error
            echo "Error: Tidak bisa hapus jadwal.";
        }
    } else {
        // Jika id tidak tersedia, tampilkan pesan kesalahan
        echo "Error: Tidak ada id jadwal.";
    }
?>
