<?php
session_start();

if(isset($_SESSION["user"])){
    if(($_SESSION["user"])=="" or $_SESSION['usertype']!='d'){
        header("location: ../login");
        exit;
    }else{
        $useremail=$_SESSION["user"];
    }
}else{
    header("location: ../login");
    exit;
}

//import database
include("../connection.php");
$userrow = $database->query("select * from doctor where docemail='$useremail'");
$userfetch=$userrow->fetch_assoc();
$userid= $userfetch["docid"];
$username=$userfetch["docname"];
$email=$userfetch["docemail"];

// Get doctor's schedules
$list110 = $database->query("select * from schedule where docid=$userid;");

// Process filter and search parameters
$sqlmain = "SELECT appointment.appoid, schedule.scheduleid, schedule.title, doctor.docname, patient.pname, schedule.scheduledate, schedule.scheduletime, appointment.apponum, appointment.appodate 
            FROM schedule 
            INNER JOIN appointment ON schedule.scheduleid = appointment.scheduleid 
            INNER JOIN patient ON patient.pid = appointment.pid 
            INNER JOIN doctor ON schedule.docid = doctor.docid 
            WHERE doctor.docid = $userid";

if(isset($_POST["sheduledate"]) && !empty($_POST["sheduledate"])){
    $sheduledate=$_POST["sheduledate"];
    $sqlmain.=" AND schedule.scheduledate='$sheduledate'";
}

if(isset($_POST["search"]) && !empty($_POST["search"])){
    $search = $_POST["search"];
    $sqlmain .= " AND (schedule.title LIKE '%$search%' OR schedule.scheduleid LIKE '%$search%' OR patient.pname LIKE '%$search%')";
}

$sqlmain.=" ORDER BY schedule.scheduledate DESC";
?>

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
<link rel="stylesheet" href="../css/doctor.css"> 

<style>
    .popup{
        animation: transitionIn-Y-bottom 0.5s;
    }
    .sub-table{
        animation: transitionIn-Y-bottom 0.5s;
    }
</style>
</head>

<body class="theme-black">
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
                <li class="active">
                    <a href="index"><img src="..\img\Dashboard.png" alt="home"><span>Dashboard</span></a>
                </li>
                <li class="active open" style="background-color: transparent">
                    <a href="schedule"><img src="..\img\LJadwal.png" alt="home"><span>Jadwal Saya</span></a>
                </li>
                <li class="active">
                    <a href="patient"><img src="..\img\LPasien.png" alt="home"><span>Pasien Saya</span></a>
                </li>
                <li>
                    <div class="user-info m-b-20">
                        <div class="image">
                            <a href=""><img src="../img/SehatiProfile.png" alt="User"></a>
                        </div>
                        <div class="detail">
                            <h6><?php echo $username; ?></h6>
                            <p class="m-b-0" style="word-wrap: break-word"><?php echo $email; ?></p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</aside>

<!-- Main Content -->
<section class="content home">
    <!-- NAVBAR -->
    <div class="nav-bar">
        <a href="index" style="display: flex; flex-wrap: wrap; align-content: center;">
            <img src="../img/back.png" style="padding-right: 8px;">
            <h2 class="Bawah">Kembali</h2>
        </a>
        <div class="Calendar">
            <div class="date-section">
                <p style="font-size: 14px;color: rgb(119, 119, 119);padding: 0;margin: 0;">
                    <?php
                    $locale = 'id_ID.UTF-8';
                    setlocale(LC_TIME, $locale);
                    $today = new DateTime();

                    $formatter = new IntlDateFormatter($locale, IntlDateFormatter::FULL, IntlDateFormatter::NONE, 'Asia/Jakarta', IntlDateFormatter::GREGORIAN);
                    $formatter->setPattern('EEEE'); // Full day name
                    echo $formatter->format($today);
                    ?>
                </p>

                <p class="heading-sub12" style="padding: 0;margin: 0;">
                    <?php 
                    $formatter->setPattern('dd MMMM yyyy'); // Full date format
                    echo $formatter->format($today);
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

    <!-- Schedule header with counts and filters in one row -->
    <div style="display: flex; justify-content: space-between; align-items: center; padding: 10px 20px;">
        <p class="heading-janjitemu">Jumlah Jadwal: <span style="font-weight: 600;"><?php echo $list110->num_rows; ?></span></p>
        
        <div class="filter-search" style="display: flex; align-items: center;">
            <div style="margin-right: 10px;">
                <a href="schedule" class="btn-filter-doc" style="padding: 15px; margin:0; width:100%">Reset Filter</a>
            </div>
            
            <div class="filter-doc" style="border-radius: 16px; border: 1px solid rgba(57, 57, 57, 0.50); background: #FFF; display: flex; height: 50px; padding: 0px 16px; align-items: center; gap: 8px; margin-right: 16px;">
                <form action="" method="post" id="dateForm">
                    <input type="date" name="sheduledate" id="date" class="input-text filter-container-items" style="margin: 0; width: 100%;" onchange="document.getElementById('dateForm').submit();">
                </form>
            </div>
            
            <div>
                <form action="" method="post" class="header-search">
                    <input type="search" name="search" class="input-text header-searchbar" placeholder="cari Pasien" list="patients" style="background: none; display: flex; text-align: left; padding: 0px;">
                    
                    <?php
                    echo '<datalist id="patients">';
                    $patientList = $database->query("SELECT pname FROM patient");
                    
                    if($patientList && $patientList->num_rows > 0) {
                        while($row = $patientList->fetch_assoc()) {
                            $patientName = $row["pname"];
                            echo "<option value='$patientName'><br/>";
                        }
                    }
                    echo '</datalist>';
                    ?>
                    
                    <input type="image" src="../img/search.png">
                </form>
            </div>
        </div>
    </div>

    <!-- Table of schedules -->
    <div class="abc scroll" style="margin: 0 auto; width: 95%;">
        <table width="100%" class="sub-table scrolldown" border="0">
            <thead>
                <tr>
                    <th class="table-headin">Nama Pasien</th>
                    <th class="table-headin">Deskripsi</th>
                    <th class="table-headin">Tanggal</th>
                    <th class="table-headin">Waktu</th>
                    <th class="table-headin">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $database->query($sqlmain);
                
                if(!$result || $result->num_rows == 0) {
                    echo '<tr>
                    <td colspan="5">
                    <br><br><br><br>
                    <center>
                    <img src="../img/404.gif" width="25%">
                    <br>
                    <p class="heading-main12" style="color: var(--Color-Neutral-neutral-700, #353C46); font-family: Rubik, sans-serif; font-size: 48px; font-style: normal; font-weight: 700; line-height: normal; padding:0px !important; margin: 0px;">Opps!</p>
                    <p class="heading-main12" style="color: var(--Color-Neutral-neutral-500, #4B5563); font-family: \'Nunito Sans\', sans-serif; font-size: 24px; font-style: normal; font-weight: 400; line-height: normal; padding:0px !important; margin: 0px;">Belum ada data apapun disini.</p>
                    <a class="non-style-link" href="schedule"><button class="login-btn btn-primary-soft btn" style="display: flex;justify-content: center;align-items: center;margin-left:20px;">&nbsp; Show all Sessions &nbsp;</button>
                    </a>
                    </center>
                    <br><br><br><br>
                    </td>
                    </tr>';
                } else {
                    while($row = $result->fetch_assoc()) {
                        $scheduleid = $row["scheduleid"];
                        $appoid = $row["appoid"];
                        $title = $row["title"];
                        $docname = $row["docname"];
                        $scheduledate = $row["scheduledate"];
                        $scheduletime = $row["scheduletime"];
                        $pname = $row["pname"];
                        
                        // Confirmation popup
                        $confirmation_popup = "onclick=\"return confirm('Apakah Anda yakin akan menghapus sesi ini?')\"";
                        
                        echo '<tr>
                        <td style="border-bottom: 1px solid var(--Color-Neutral-neutral-100, #C7CACF);"> &nbsp;' . substr($pname, 0, 25) . '</td>
                        <td style="border-bottom: 1px solid var(--Color-Neutral-neutral-100, #C7CACF);"> &nbsp; &nbsp;' . substr($title, 0, 30) . '</td>
                        <td style="text-align:center; border-bottom: 1px solid var(--Color-Neutral-neutral-100, #C7CACF);">' . date('d/m/Y', strtotime($scheduledate)) . '</td>
                        <td style="text-align:center; border-bottom: 1px solid var(--Color-Neutral-neutral-100, #C7CACF);">' . date('H:i', strtotime($scheduletime)) . '</td>
                        <td style="border-bottom: 1px solid var(--Color-Neutral-neutral-100, #C7CACF);">
                            <div style="display:flex;justify-content: center;">
                                <a href="delete-appointment?id=' . ($appoid) . '" class="non-style-link" ' . $confirmation_popup . '>
                                    <img src="../img/delete-text.png" alt="Delete">
                                </a>
                            </div>
                        </td>
                        </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</section>

<!-- Jquery Core Js -->
<script src="../assets-page/bundles/libscripts.bundle.js"></script>
<script src="../assets-page/bundles/vendorscripts.bundle.js"></script>
<script src="../assets-page/bundles/knob.bundle.js"></script>
<script src="../assets-page/bundles/jvectormap.bundle.js"></script>
<script src="../assets-page/bundles/morrisscripts.bundle.js"></script>
<script src="../assets-page/bundles/sparkline.bundle.js"></script>
<script src="../assets-page/bundles/doughnut.bundle.js"></script>
<script src="../assets-page/bundles/mainscripts.bundle.js"></script>
<script src="../assets-page/js/pages/index.js"></script>
<script src="../assets-page/js/line.js"></script>
<script src="../assets-page/js/table.js"></script>
</body>
</html>