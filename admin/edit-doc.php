<!doctype html>
<html class="no-js " lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>Sehati</title>
<link rel="icon" href="../img/LogoSehati.png">

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

// Periksa apakah pengguna telah login
if (!isset($_SESSION["user"]) || $_SESSION["user"] == "" || $_SESSION['usertype'] != 'a') {
    header("location: ../login.php");
    exit; // Pastikan untuk keluar dari skrip setelah mengalihkan
}

include("../connection.php");
include("../adm.php");

// var yg dibutuhkan
$email = "admin@example.com";
$userType = "admin";
$adminName = "Admin Name";
$apassword = "admin123";
$adminEmail = "admin@example.com";

$admin = new Admin($email, $userType, $adminEmail, $adminName, $apassword, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Call the editDoctor() function
    $admin->editDoctor();
}

$doctor = $admin->getDoctorDetails();
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
            <img src="../img/LogoSehatiDashboard.png" style="display: block; margin: 0 auto; padding-bottom: 64px; padding-top: 64px;">
                <li class="header">UTAMA</li>
                    <li class="active">
                        <a href="index"><img src="..\img\Dashboard.png" alt="home"><span>Dashboard</span></a>
                    </li>
                    <li class="active open" style="background-color: transparent">
                        <a href="doctors"><img src="..\img\LDokter.png" alt="home"><span>Dokter</span></a>
                    </li>
                    <li class="active">
                        <a href="index"><img src="..\img\LJadwal.png" alt="home"><span>Jadwal</span></a>
                    </li>
                    <li class="active">
                        <a href="index"><img src="..\img\LJanTem.png" alt="home"><span>Janji Temu</span></a>
                    </li>
                    <li class="active">
                        <a href="index"><img src="..\img\LPasien.png" alt="home"><span>Pasien</span></a>
                    </li>
                 
                <li>
                    <div class="user-info m-b-20">
                        <div class="image">
                            <a href="profile.html"><img src="../img/SehatiProfile.png" alt="User"></a>
                        </div>
                        <div class="detail">
                            <h6>Admin Sehati</h6>
                            <p class="m-b-0">admin@sehati.ilkomerz.biz.id</p>
                                         
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
<div class="nav-bar" >
    <a href="doctors" style="display: flex; flex-wrap: wrap; align-content: center;">
            <img src="../img/back.png" style="padding-right: 8px;">
            <h2 class="Bawah">Kembali</h2>
    </a>
    <div class="Calendar">
        <div class="date-section">
            <p style="font-size: 14px;color: rgb(119, 119, 119);padding: 0;margin: 0;">
                <?php
                setlocale(LC_TIME, 'id_ID'); 
                $today = strftime('%A');
                echo $today;
                ?>
            </p>

            <p class="heading-sub12" style="padding: 0;margin: 0;">
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
</div>


<!-- CONTAINER/ISI -->
<div class="form-doctor">
    <div class="form-doctor-header">
        <h1>Edit Dokter</h1>
    </div>
    <div class="form-doctor-body">
        <form method="POST">
            <div class="row">
                <div class="col">
                    <h1>Nama Dokter</h1>
                <div id="subject-field">
                    <input type="text" required placeholder="Nama Dokter" name="name" value="<?php echo isset($doctor['docname']) ? $doctor['docname'] : ''; ?>">
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h1>Email</h1>
                <div id="email-field">
                    <input type="text" required placeholder="Alamat Email" name="email" value="<?php echo isset($doctor['docemail']) ? $doctor['docemail'] : ''; ?>">
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h1>NIK</h1>
                    <div id="number-field">
                        <input type="number" name="nic" required placeholder="Nomor Induk Kependudukan" value="<?php echo isset($doctor['docnic']) ? $doctor['docnic'] : ''; ?>">
                    </div>
                </div>
                <div class="col">
                    <h1>Nomor Telepon</h1>
                    <div id="number-field">
                        <input type="number" required placeholder="Nomor Telepon" name="tele" value="<?php echo isset($doctor['doctel']) ? $doctor['doctel'] : ''; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                        <h1>Spesialis</h1>
                        <div class="select-menu" style="position: relative;">
                            <select name="specialties" id="specialties" class="select-btn" required>
                                <option value="" selected disabled>Pilih Spesialis Dokter</option>
                                <?php
                                //import database
                                include("../connection.php");

                                // Query untuk mengambil daftar spesialis dari database
                                $query = "SELECT id, sname FROM specialties ORDER BY sname ASC";
                                $result = $database->query($query);

                                // Memeriksa apakah ada hasil yang ditemukan
                                if ($result->num_rows > 0) {
                                    // Loop melalui setiap baris hasil query
                                    while ($row = $result->fetch_assoc()) {
                                        // Ekstrak data spesialis
                                        $ids = $row['id'];
                                        $sname = $row['sname'];
                                        ?>
                                        <option value="<?php echo $ids; ?>" <?php if(isset($spec) && $spec == $ids) echo "selected"; ?>><?php echo $sname; ?></option>
                                        <?php
                                    }
                                } else {
                                    // Jika tidak ada hasil yang ditemukan
                                    echo "<option value='' disabled>Tidak ada spesialis yang ditemukan.</option>";
                                }
                                ?>
                            </select>
                            <i class="bx bx-chevron-down"></i>
                        </div>
                    </div>
                </div>    
            <div class="row">
                <div class="col">
                    <h1>Kata Sandi</h1>
                <div id="password-field">
                    <input type="password" required placeholder="Masukkan Kata Sandi" name="password">
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h1>Konfirmasi Kata Sandi</h1>
                <div id="confirm-password-field">
                    <input type="password" required placeholder="Konfirmasi Ulang Kata Sandi" name="cpassword">
                </div>
                </div>
            </div>
            <div class="confirm">
                <button class="button-doc" type="reset" id="reset">Buang</button>
                <button class="button-doc" type="submit" name="submit" id="submit">Tambah</button>
            </div>
            <input type="hidden" name="id00" value="<?php echo $doctor['docid']; ?>">
            <input type="hidden" name="oldemail" value="<?php echo $doctor['docemail']; ?>">
        </form>
    </div>
</div>
                   
<!-- PHP -->

</section>
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
<script>
const optionMenus = document.querySelectorAll(".select-menu");

optionMenus.forEach(optionMenu => {
    const selectBtn = optionMenu.querySelector(".select-btn"),
          options = optionMenu.querySelectorAll(".option"),
          sBtn_text = optionMenu.querySelector(".sBtn-text1");

    selectBtn.addEventListener("click", () => optionMenu.classList.toggle("active"));       

    options.forEach(option =>{
        option.addEventListener("click", ()=>{
            let selectedOption = option.querySelector(".option-text").innerText;
            sBtn_text.innerText = selectedOption;

            selectBtn.classList.remove("aktif", "non-aktif");

            selectBtn.classList.add(option.id);

            optionMenu.classList.remove("active");
            optionMenu.classList.remove("non-active");
        });
    });
});
</script>
</body>
</html>