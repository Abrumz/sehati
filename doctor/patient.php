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

<?php
    session_start();

    if(isset($_SESSION["user"])){
        if(($_SESSION["user"])=="" or $_SESSION['usertype']!='d'){
            header("location: ../login");
        }else{
            $useremail=$_SESSION["user"];
        }
    }else{
        header("location: ../login");
    }
    
    //import database
    include("../connection");
    $userrow = $database->query("select * from doctor where docemail='$useremail'");
    $userfetch=$userrow->fetch_assoc();
    $userid= $userfetch["docid"];
    $username=$userfetch["docname"];
    $email=$userfetch["docemail"];
 //echo $userid;
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
                <li class="active">
                    <a href="index"><img src="..\img\Dashboard.png" alt="home"><span>Dashboard</span></a>
                </li>
                <li class="active">
                    <a href="schedule"><img src="..\img\LJadwal.png" alt="home"><span>Jadwal Saya</span></a>
                </li>
                <li class="active open" style="background-color: transparent">
                    <a href="patient"><img src="..\img\LPasien.png" alt="home"><span>Pasien Saya</span></a>
                </li>
                 
                <?php
                    //import database
                    include("../connection");

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
<div class="nav-bar" >
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
                echo $today->format('l'); // format the day name in English
                ?>
            </p>

            <p class="heading-sub12" style="padding: 0;margin: 0;">
                <?php 
                setlocale(LC_TIME, $locale);
                echo $today->format('d F Y'); // format the date in Indonesian

                $patientrow = $database->query("select  * from  patient;");
                $doctorrow = $database->query("select  * from  doctor;");
                $appointmentrow = $database->query("select  * from  appointment where appodate>='" . $today->format('Y-m-d') . "';");
                $schedulerow = $database->query("select  * from  schedule where scheduledate='" . $today->format('Y-m-d') . "';");
                $list110 = $database->query("select  * from  schedule where docid=$userid;");
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
</div>
<div class="dash-body">
    <table border="0" width="100%" style=" border-spacing: 0;margin:0;padding:0;margin-top:25px; ">
        <tr >
            <td>
                <div class="nav-doctor" style="justify-content: flex-end; padding-right: 44px; padding-bottom: 0">  
                    <form action="" method="post" class="header-search">
                        <input type="search" name="search" class="input-text header-searchbar" placeholder="cari Pasien" list="patient" style="background: none; display: flex; text-align: left; padding: 0px;">  
                        <?php
                            echo '<datalist id="patient">';
                            $list11 = $database->query("select  pname,pemail from patient;");
                            for ($y=0;$y<$list11->num_rows;$y++){
                                $row00=$list11->fetch_assoc();
                                $d=$row00["pname"];
                                $c=$row00["pemail"];
                                echo "<option value='$d'><br/>";
                                echo "<option value='$c'><br/>";
                            };
                            echo ' </datalist>';
                        ?>
                        <input type="image" src="../img/search.png">
                    </form>
                </div>                        
            </td>
        </tr>
        <tr>
            <td colspan="4" style="padding-top:10px;">
                <p class="heading-main12" style="margin-left: 45px;font-size:18px;color:rgb(49, 49, 49);">Jumlah Pasien: <span style="font-weight: 700;"><?php echo $list11->num_rows; ?></span></p>
            </td>
        </tr>
        <?php
            if($_POST){
                $keyword=$_POST["search"];
                $sqlmain= "select * from patient where pemail='$keyword' or pname='$keyword' or pname like '$keyword%' or pname like '%$keyword' or pname like '%$keyword%' ";
            }else{
                $sqlmain= "select * from patient order by pid desc";
            }
        ?>
        <?php       
            $selecttype="My";
            $current="My patients Only";
            if($_POST){
                if(isset($_POST["search"])){
                    $keyword=$_POST["search"];
                    $sqlmain= "select * from patient where pemail='$keyword' or pname='$keyword' or pname like '$keyword%' or pname like '%$keyword' or pname like '%$keyword%' ";
                    $selecttype="my";
                }
                if(isset($_POST["filter"])){
                    if($_POST["showonly"]=='all'){
                        $sqlmain= "select * from patient";
                        $selecttype="All";
                        $current="All patients";
                    }else{
                        $sqlmain= "select * from appointment inner join patient on patient.pid=appointment.pid inner join schedule on schedule.scheduleid=appointment.scheduleid where schedule.docid=$userid;";
                        $selecttype="My";
                        $current="My patients Only";
                    }
                }
            }else{
                $sqlmain= "select * from appointment inner join patient on patient.pid=appointment.pid inner join schedule on schedule.scheduleid=appointment.scheduleid where schedule.docid=$userid;";
                $selecttype="My";
            }
        ?>
        <tr>
            <td colspan="4">
                <center>
                    <div class="abc scroll">
                        <table width="93%" class="sub-table scrolldown"  style="border-spacing:0; ">
                            <thead>
                                <tr>
                                    <th class="table-headin" style="padding: 8px">
                                        Nama Pasien
                                    </th>
                                    <th class="table-headin">
                                        NIK
                                    </th>
                                    <th class="table-headin">
                                        Telepon
                                    </th>
                                    <th class="table-headin">
                                        Email
                                    </th>
                                    <th class="table-headin">
                                        Date of Birth
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $result= $database->query($sqlmain);
                                    if($result->num_rows==0){
                                        echo '<tr>
                                        <td colspan="4">
                                        <br><br><br><br>
                                        <center>
                                        <img src="../img/404-empty.gif" alt="Tidak ada data yang ditemukan." style="margin: auto; ">
                                        <br>
                                        <p class="heading-main12" style="margin-left: 45px;font-size:20px;color:rgb(49, 49, 49)">We couldnt find anything related to your keywords !</p>
                                        <a class="non-style-link" href="patient"><button  class="login-btn btn-primary-soft btn"  style="display: flex;justify-content: center;align-items: center;margin-left:20px;">&nbsp; Show all Patients &nbsp;</font></button>
                                        </a>
                                        </center>
                                        <br><br><br><br>
                                        </td>
                                        </tr>';
                                    } else {
                                        for ($x=0; $x<$result->num_rows;$x++){
                                            $row=$result->fetch_assoc();
                                            $pid=$row["pid"];
                                            $name=$row["pname"];
                                            $email=$row["pemail"];
                                            $nic=$row["pnic"];
                                            $dob=$row["pdob"];
                                            $tel=$row["ptel"];

                                            // Ensuring non-null values before using them
                                            $name = $name ?? '';
                                            $nic = $nic ?? '';
                                            $tel = $tel ?? '';
                                            $email = $email ?? '';
                                            $dob = $dob ?? '';

                                            echo '<tr>
                                            <td style=" border-bottom: 1px solid var(--Color-Neutral-neutral-100, #C7CACF); padding: 8px"> &nbsp; '.
                                                substr($name,0,35)
                                                .'</td>
                                                <td style=" border-bottom: 1px solid var(--Color-Neutral-neutral-100, #C7CACF);">
                                                '.substr($nic,0,12).'
                                                </td>
                                                <td style=" border-bottom: 1px solid var(--Color-Neutral-neutral-100, #C7CACF);">
                                                    '.substr($tel,0,10).'
                                                </td>
                                                <td style=" border-bottom: 1px solid var(--Color-Neutral-neutral-100, #C7CACF);">
                                                '.substr($email,0,20).'
                                                </td>
                                                <td style="text-align:center; border-bottom: 1px solid var(--Color-Neutral-neutral-100, #C7CACF);">
                                                '.date('d/m/Y', strtotime($dob)).'
                                                </td>
                                            </tr>';
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </center>
            </td> 
        </tr>
    </table>
</div>
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
