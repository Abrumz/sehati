<!doctype html>
<html class="no-js " lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>Sehati</title>
<link rel="icon" href="../img/sehati-vector.png">

<link rel="icon" href="favicon.ico" type="image/x-icon"> 

<!-- Favicon-->
<link rel="stylesheet" href="../assets-page/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets-page/plugins/morrisjs/morris.css" />
<link rel="stylesheet" href="../assets-page/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css"/>

<!-- Custom Css -->
<link rel="stylesheet" href="../assets-page/css/main.css">
<link rel="stylesheet" href="../assets-page/css/color_skins.css">
<link rel="stylesheet" href="../assets-page/css/font.css">
<link rel="stylesheet" href="../css/animations.css">  
<link rel="stylesheet" href="../css/main.css"> 
    <style>
        .dashbord-tables,.doctor-heade{
            animation: transitionIn-Y-over 0.5s;
        }
        .filter-container{
            animation: transitionIn-Y-bottom  0.5s;
        }
        .sub-table,#anim{
            animation: transitionIn-Y-bottom 0.5s;
        }
        .doctor-heade{
            animation: transitionIn-Y-over 0.5s;
        }
    </style>
    
    
</head>
<body>
    <?php

    //learn from w3schools.com

    session_start();

    if(isset($_SESSION["user"])){
        if(($_SESSION["user"])=="" or $_SESSION['usertype']!='d'){
            header("location: ../login.php");
        }else{
            $useremail=$_SESSION["user"];
        }

    }else{
        header("location: ../login.php");
    }
    

    //import database
    include("../connection.php");
    $userrow = $database->query("select * from doctor where docemail='$useremail'");
    $userfetch=$userrow->fetch_assoc();
    $userid= $userfetch["docid"];
    $username=$userfetch["docname"];
    $email=$userfetch["docemail"];

    $doctor_id = $userid; // Menggunakan ID dokter dari session

    // Query untuk mengambil jumlah jadwal yang hanya dimiliki oleh dokter yang login
    $query = "SELECT COUNT(*) AS total_schedules FROM schedule WHERE docid = '$doctor_id'";

    // Eksekusi query
    $result = $database->query($query);

    // Periksa apakah query berhasil dieksekusi dan hasilnya ditemukan
    if ($result) {
        // Ambil jumlah jadwal dari hasil query
        $row = $result->fetch_assoc();
        $total_schedules = $row['total_schedules'];
    } else {
        // Jika query gagal dieksekusi atau tidak ada hasil, atur jumlah jadwal ke 0
        $total_schedules = 0;
    }

    //echo $userid;
    //echo $username;
    
    ?>
    <body class="theme-black">
<!-- Page Loader -->




<div class="overlay_menu">
    <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-close"></i></button>
    <div class="container">        
        <div class="row clearfix">
            <div class="card">
                <div class="body">
                    <div class="input-group m-b-0">                
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-search"></i>
                        </span>
                    </div>
                </div>
            </div>
                      
        </div>
        
    </div>
</div>
<div class="overlay"></div><!-- Overlay For Sidebars -->

<!-- Left Sidebar -->
<aside id="minileftbar" class="minileftbar">
    <ul class="menu_list">
        <li>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="index"><img src="../img/Oncology.png" alt="Alpino"></a>
        </li>     
        <li><a href="javascript:void(0);" class="menu-sm"><i class="zmdi zmdi-swap"></i></a></li>        
        <li><a href="javascript:void(0);" class="fullscreen" data-provide="fullscreen"><i class="zmdi zmdi-fullscreen"></i></a></li>
        <li class="power">
            <a href="javascript:void(0);" class="js-right-sidebar"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a>            
            <a href="../logout" class="mega-menu"><i class="zmdi zmdi-power"></i></a>
        </li>
    </ul>    
</aside>

<aside class="right_menu">
    
    <div id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting">Setting</a></li>        
            
        </ul>
        <div class="tab-content slim_scroll">
            <div class="tab-pane slideRight active" id="setting">
                <div class="card">
                    <div class="header">
                        <h2><strong>Colors</strong> Skins</h2>
                    </div>
                    <div class="body">
                        <ul class="choose-skin list-unstyled m-b-0">
                            <li data-theme="black" class="active">
                                <div class="black"></div>
                            </li>
                            <li data-theme="purple">
                                <div class="purple"></div>
                            </li>                   
                            <li data-theme="blue">
                                <div class="blue"></div>
                            </li>
                            <li data-theme="cyan">
                                <div class="cyan"></div>                    
                            </li>
                            <li data-theme="green">
                                <div class="green"></div>
                            </li>
                            <li data-theme="orange">
                                <div class="orange"></div>
                            </li>
                            <li data-theme="blush">
                                <div class="blush"></div>                    
                            </li>
                        </ul>
                    </div>
                </div>                
                <div class="card">
                    <div class="header">
                        <h2><strong>General</strong> Settings</h2>
                    </div>
                    <div class="body">
                        <ul class="setting-list list-unstyled m-b-0">
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox1" type="checkbox">
                                    <label for="checkbox1">Ada Raka cuy</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox2" type="checkbox" checked="">
                                    <label for="checkbox2">Kotop Ganteng</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox3" type="checkbox">
                                    <label for="checkbox3">Belllllllll</label>
                                </div>                        
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox4" type="checkbox">
                                    <label for="checkbox4">Tata Netchita smansa</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox5" type="checkbox" checked="">
                                    <label for="checkbox5">Kotop ter the best</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox m-b-0">
                                    <input id="checkbox6" type="checkbox">
                                    <label for="checkbox6">Kelompok Jaya</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>Left</strong> Menu</h2>
                    </div>
                    <div class="body theme-light-dark">
                        <button class="t-dark btn btn-primary btn-round btn-block">Dark</button>
                    </div>
                </div>               
            </div>
            
        </div>
    </div>
    <div id="leftsidebar" class="sidebar">
        <div class="menu">
            <ul class="list">
            <img src="../img/LogoSehatiDashboard.png" style="display: block; margin: 0 auto; padding-bottom: 25%; padding-top: 25%;">
            <li class="header">UTAMA</li>
                    <li class="active open" style="background-color: transparent">
                        <a href="index"><img src="..\img\Dashboard.png" alt="home"><span>Dashboard</span></a>
                    </li>
                    <!-- <li class="active">
                        <a href="doctors"><img src="..\img\LDokter.png" alt="home"><span>Dokter</span></a>
                    </li> -->
                    <!-- <li class="active">
                        <a href="appointment"><img src="..\img\LJanTem.png" alt="home"><span>Janji Temu</span></a>
                    </li> -->
                    <li class="active">
                        <a href="schedule"><img src="..\img\LJadwal.png" alt="home"><span>Jadwal Saya</span></a>
                    </li>
                    
                    <li class="active">
                        <a href="patient"><img src="..\img\LPasien.png" alt="home"><span>Pasien Saya</span></a>
                    </li>
                <?php
                //import database
                        include("../connection.php");

                        // Query untuk mengambil data admin dari database
                            $query = "SELECT * FROM admin";
                            $result = $database->query($query);

                            // Memeriksa apakah ada hasil yang ditemukan
                            if ($result->num_rows > 0) {
                                // Loop melalui setiap baris hasil query
                                while ($row = $result->fetch_assoc()) {
                                    // Ekstrak data yang dibutuhkan dari setiap baris
                                    $adminEmail = $row['aemail'];
                            ?>
                            <li>
                                <div class="user-info m-b-20">
                                    <div class="image">
                                        <a href=""><img src="../img/SehatiProfile.png" alt="User"></a>
                                    </div>
                                    <div class="detail">
                                        <h6><?php echo $username  ?></h6>
                                        <p class="m-b-0" style="word-wrap: break-word"><?php echo $email; ?></p>
                                                    
                                    </div>
                                </div>
                            </li>
                            <?php
                                }
                            } else {
                                // Jika tidak ada data admin yang ditemukan
                                echo "Tidak ada data admin yang ditemukan.";
                            }
                    ?>           
            </ul>
        </div>
    </div>
</aside>

<!-- Main Content -->
<section class="content home">
<!-- NAVBAR -->

</div>

        <div class="dash-body" style="margin-top: 15px">
            <table border="0" width="100%" style=" border-spacing: 0;margin:0;padding:0;" >
                <tr>
                    <td colspan="4" >
                        
                    <center>
                    <table class="filter-container doctor-header" style="border: none;width:95%" border="0" >
                    <tr>
                        <td >
                            <h3 style="color: #FFF;">Hallo <?php echo $username  ?>,</h3>
                            <p style="color: #FFF;">Selamat Datang di Dashboard Sehati! Yuk cek Jadwal Anda Hari ini! 
                            </p>
                            <a href="schedule" class="non-style-link" style="padding:32px; "><button class="btn-doctor-dash">
                                <p>Cek Jadwal</p>
                            </button>
                            </a>
                            <br>
                            <br>
                        </td>
                    </tr>
                    </table>
                    </center>

                    <div class="nav-bar" style="display: flex; padding: 32px;">
    <div class="text-section" style="display: flex;">
        <h2 class="Bawah" style="align-content: center;">Dashboard</h2>
    </div>
    <div class="Calendar">
        <div class="date-section">
            <p style="font-size: 14px;color: rgb(119, 119, 119);padding: 0;margin: 0;">
                <?php
                setlocale(LC_TIME, 'id_ID'); 
                $today = strftime('%A');
                echo $today;
                ?>
            </p>

            <p class="heading-sub12" style="padding: 0;margin: 0; color: black">
                <?php 
                setlocale(LC_TIME, 'id_ID');
                $today = strftime('%d %B %Y');
                echo $today;


                $patientrow = $database->query("select  * from  patient;");
                $doctorrow = $database->query("select  * from  doctor;");
                $appointmentrow = $database->query("select  * from  appointment where appodate>='$today';");
                $schedulerow = $database->query("select  * from  schedule where scheduledate='$today';");


                ?>
            </p>
            
        </div>
        <div class="calendar-section">
            <button class="btn-label">
                <img src="../img/calendar.svg" alt="Calendar">
            </button>
        </div>    
    </div>
</div>
<div class="dash-doctor" class="width: 100%;">
        <div class="filter-container" style="border: none;">
            <div class="table-row-doctor">
                <div class="table-cell-doc" colspan="4" style="padding: 0">
                    <p>Status</p>
                </div>
            </div>
            <div class="table-row-doctor">
                <div class="status-doc">
                    <div class="table-cell-doc" style="width: 20vw;">
                        <div class="dashboard-table" style="padding:20px;margin:auto; width: revert-layer; display: flex">
                            <div>
                                <div class="h3-tabel">
                                    Dokter
                                </div>
                                <div class="h1-tabel">
                                    <?php echo $doctorrow->num_rows ?>
                                </div><br>
                            </div>
                            <div class="background-img-status"><img src="../img/Dokter.png" ></div>
                        </div>
                    </div>
                    <div class="table-cell-doc" style="width: 20vw;">
                        <div class="dashboard-table" style="padding:20px;margin:auto;width: revert-layer;display: flex;">
                            <div>
                                <div class="h3-tabel">
                                    Pasien
                                </div>
                                <div class="h1-tabel">
                                    <?php echo $patientrow->num_rows ?>
                                </div><br>
                                
                            </div>
                            <div class="background-img-status"><img src="../img/Pasien.png" ></div>
                        </div>
                    </div>
                </div>
                <div class="status-doc">
                    <div class="table-cell-doc" style="width: 20vw;">
                        <div class="dashboard-table" style="padding:20px;margin:auto;width: revert-layer;display: flex; ">
                            <div>
                                <div class="h3-tabel" >
                                    Jadwal
                                </div>
                                <div class="h1-tabel" >
                                    <?php echo $total_schedules ?>
                                </div><br>
                                
                            </div>
                            <div class="background-img-status"><img src="../img/Jadwal.png" ></div>
                        </div>
                    </div>
                    <!-- <div class="table-cell-doc" style="width: 20vw;">
                        <div class="dashboard-table" style="padding:20px;margin:auto;width: revert-layer;display: flex;padding-top:26px;padding-bottom:26px;">
                            <div>
                                <div class="h3-tabel" style="font-size: 15px">
                                    Janji Temu
                                </div>
                                <div class="h1-tabel">
                                    <?php echo $schedulerow ->num_rows ?>
                                </div><br>
                                
                            </div>
                            <div class="background-img-status"><img src="../img/JanTem.png" ></div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="filter-container" style="border: none;">
            <div class="table-row-doctor">
                <div class="table-cell-doc" colspan="4">
                    <p>Jadwal yang Akan Datang</p>
                </div>
            </div>
            <div class="table-row-doctor">
            <?php
    //import database
    include("../connection.php");

     // id dokter yang sedang login
     $doctor_id = $userid; // Menggunakan ID dokter dari session

     // query ambil data pasien
     $query = "SELECT schedule.scheduleid, schedule.title, doctor.docname, schedule.scheduledate, schedule.scheduletime, patient.pname, appointment.apponum, appointment.appodate
                 FROM appointment 
                 JOIN schedule ON appointment.scheduleid = schedule.scheduleid 
                 JOIN doctor ON schedule.docid = doctor.docid
                 JOIN patient ON appointment.pid = patient.pid
                 WHERE doctor.docid = '$doctor_id'
                 ORDER BY schedule.scheduledate DESC, schedule.scheduletime DESC"; // Mengurutkan data berdasarkan tanggal dan waktu jadwal dari yang paling lama
    $result = $database->query($query);

    $count = 0;
    $validCount = 0; // Menambahkan variabel untuk menghitung jumlah jadwal valid

    // periksa hasil apakah lebih dari 4 atau tidak
    if ($result->num_rows > 0) {
        // loop melalui setiap baris hasil query
        while ($row = $result->fetch_assoc()) {
            $scheduleid = $row["scheduleid"];
            $title = $row["title"];
            $scheduledate = $row["scheduledate"];
            $scheduletime = $row["scheduletime"];
            $pname = $row["pname"];
            $apponum = $row["apponum"];
            $appodate = $row["appodate"];
            $title = $row["title"];

            // Cek apakah jadwal sudah lewat
            $currentDateTime = date("Y-m-d H:i:s");
            $scheduleDateTime = date("Y-m-d H:i:s", strtotime($scheduledate . ' ' . $scheduletime));
            if ($scheduleDateTime > $currentDateTime) {
                // menampilkan blok
                if ($count < 4) {
                    ?>
                    <div class="table-cell-jadwal">
                        <div class="dashboard-table-doctor" style="padding:20px;margin:auto; height: auto">
                            <div style="display: flex; justify-content: space-between">
                                <div style="display: flex;">
                                    <div class="line-color"></div>
                                    <div>
                                        <h5><?php echo $title; ?></h5>
                                        <h2 style="margin-bottom: 0px;"><?php echo $pname; ?></h2>
                                    </div>
                                </div>
                                <div class="calendar-janji" style="display: flex; flex-direction: column; padding: 0 8%;  ">
                                    <h1>Tanggal</h1>
                                    <h2><?php echo date('d/m/Y', strtotime($scheduledate)); ?></h2>
                                </div>
                                <div class="calendar-janji" style="display: flex; flex-direction: column;">
                                    <h1 style="display: flex;  justify-content: flex-end;">waktu</h1>
                                    <h2><?php echo date('H:i', strtotime($scheduletime)) . ' WIB'; ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    // update var
                    $count++;
                    $validCount++; // Menambah jumlah jadwal valid
                } else {
                    break; // stop loop
                }
            }
        }
    }

    // Periksa jika tidak ada jadwal valid yang ditemukan
    if ($validCount === 0) {
        // tidak ada data
        echo '<img src="../img/404-empty.gif" alt="Tidak ada data yang ditemukan." style="margin: auto; ">';
        // echo '<img src="../img/404.gif" alt="Tidak ada data yang ditemukan." style="margin: auto; ">';
    }
?>


                
                <div style="text-align: end;">
                    <a href="../doctor/schedule">
                        <h4>Lihat Semua Jadwal</h4>
                    </a>
                </div>
            </div>
        </div>
<div>






                                </td>
                            </tr>
                        </table>
                    </td>
                <tr>
            </table>
        </div>
    </div>


<!-- Jquery Core Js -->
<script src="../assets-page/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
<script src="../assets-page/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="../assets-page/bundles/knob.bundle.js"></script> <!-- Jquery Knob-->
<script src="../assets-page/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="../assets-page/bundles/morrisscripts.bundle.js"></script> <!-- Morris Plugin Js --> 
<script src="../assets-page/bundles/sparkline.bundle.js"></script> <!-- sparkline Plugin Js --> 
<script src="../assets-page/bundles/doughnut.bundle.js"></script>

<script src="../assets-page/bundles/mainscripts.bundle.js"></script>
<script src="../assets-page/js/pages/index.js"></script>
<script src="../assets-page/js/line.js"></script>
<script src="../assets-page/js/table.js"></script>

</body>
</html>