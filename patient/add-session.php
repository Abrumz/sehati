<?php
// add-session
session_start();

if(isset($_SESSION["user"])){
    if(($_SESSION["user"])=="" or $_SESSION['usertype']!='p'){
        header("location: ../login");
        exit;
    }else{
        $useremail=$_SESSION["user"];
    }
}else{
    header("location: ../login");
    exit;
}

include("../connection.php");
include("../pat.php");

$email = $_SESSION['user'];
$userType = 'p'; 
$patientName = '';
$phoneNumber = ''; 
$nik = ''; 
$dateOfBirth = '';
$password = ''; 
$patientId = '';
 
// Create Patient object with database connection from connection
$patient = new Patient($email, $userType, $patientName, $phoneNumber, $dateOfBirth, $nik, $password, $patientId);

// Get user info
$userInfo = $patient->getUserInfo($email);
$username = $userInfo['pname'];
$picture = $userInfo['picture'];

// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $userid = $userInfo['pid'];
    $sesi_id = $_POST['scheduleid'];

    // Call bookAppointment method
    $result = $patient->bookAppointment($userid, $sesi_id);

    // Check if appointment was created successfully
    if ($result === true) {
        header("location: schedule");
        exit;
    } else {
        $error_message = "Gagal menambahkan jadwal: " . $result;
    }
}
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
            <img src="../img/LogoSehatiDashboard.png" style="display: block; margin: 0 auto; padding-bottom: 64px; padding-top: 64px;">
                <li class="header">UTAMA</li>
                    <li class="active">
                        <a href="index"><img src="..\img\Dashboard.png" alt="home"><span>Dashboard</span></a>
                    </li>
                    <li class="active open" style="background-color: transparent">
                        <a href="schedule"><img src="..\img\LJadwal.png" alt="home"><span>Jadwal Saya</span></a>
                    </li>
                    <li class="active">
                        <a href="doctors"><img src="..\img\LDokter.png" alt="home"><span>Semua Dokter</span></a>
                    </li>
                 
                <li>
                    <div class="user-info m-b-20">
                        <div class="image">
                            <a href="">
                                <img src="<?php echo empty($picture) ? '../img/SehatiProfile.png' : $picture; ?>" alt="User">
                            </a>
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
        <a href="schedule" style="display: flex; flex-wrap: wrap; align-content: center;">
            <img src="../img/back.png" style="padding-right: 8px;">
            <h2 class="Bawah">Kembali</h2>
        </a>
        <div class="Calendar">
            <div class="date-section">
                <p style="font-size: 14px;color: rgb(119, 119, 119);padding: 0;margin: 0;">
                    <?php
                    setlocale(LC_TIME, 'id_ID'); 
                    $today = new DateTime();
                    echo $today->format('l');
                    ?>
                </p>

                <p class="heading-sub12" style="padding: 0;margin: 0;">
                    <?php 
                    setlocale(LC_TIME, 'id_ID');
                    echo $today->format('d F Y');

                    $todayFormatted = $today->format('Y-m-d');
                    $patientrow = $database->query("select * from patient;");
                    $doctorrow = $database->query("select * from doctor;");
                    $appointmentrow = $database->query("select * from appointment where appodate>='$todayFormatted';");
                    $schedulerow = $database->query("select * from schedule where scheduledate='$todayFormatted';");
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

    <!-- CONTAINER/ISI -->
    <div class="form-doctor">
        <div class="form-doctor-header">
            <h1>Tambah Jadwal Baru</h1>
        </div>
        <?php if(isset($error_message)): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error_message; ?>
            </div>
        <?php endif; ?>
        <div class="form-doctor-body">
            <form method="POST">
                <div class="row">
                    <div class="col">
                        <h1>Pilih Sesi Jadwal Temu</h1>
                        <select name="scheduleid" id="scheduleid" class="form-control" required onchange="setSessionInfo()">
                            <option value="">Pilih Sesi</option>
                            <?php
                            // Query untuk mengambil data sesi dari tabel schedule
                            $query = "SELECT * FROM schedule";
                            $result = $database->query($query);
                            
                            if($result && $result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    // Query untuk mendapatkan nama dokter berdasarkan docid
                                    $doctor_query = "SELECT docname FROM doctor WHERE docid = '{$row['docid']}'";
                                    $doctor_result = $database->query($doctor_query);
                                    $doctor_row = $doctor_result->fetch_assoc();
                                    $docname = $doctor_row['docname'];
                                
                                    echo "<option value='{$row['scheduleid']}' 
                                                data-docname='{$docname}' 
                                                data-scheduledate='{$row['scheduledate']}' 
                                                data-scheduletime='{$row['scheduletime']}'>
                                            {$row['title']}
                                        </option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h1>Nama Dokter</h1>
                        <input type="text" id="docname" class="form-control" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h1>Tanggal Sesi</h1>
                        <input type="date" id="scheduledate" class="form-control" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h1>Waktu Sesi</h1>
                        <input type="time" id="scheduletime" class="form-control" readonly>
                    </div>
                </div>
                <div class="confirm">
                    <button class="button-doc" type="reset" id="reset">Buang</button>
                    <button class="button-doc" type="submit" name="submit" id="submit">Tambah</button>
                </div>
            </form>
        </div>
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

<script>
// Function to populate session information when selected
function setSessionInfo() {
    var selectedOption = document.getElementById("scheduleid").querySelector("option:checked");
    
    if (!selectedOption || selectedOption.value === "") {
        document.getElementById("docname").value = "";
        document.getElementById("scheduledate").value = "";
        document.getElementById("scheduletime").value = "";
        return;
    }

    var docname = selectedOption.getAttribute("data-docname");
    var scheduledate = selectedOption.getAttribute("data-scheduledate");
    var scheduletime = selectedOption.getAttribute("data-scheduletime");

    document.getElementById("docname").value = docname;
    document.getElementById("scheduledate").value = scheduledate;
    document.getElementById("scheduletime").value = scheduletime;
}

// Initialize form fields on page load
document.addEventListener('DOMContentLoaded', function() {
    // Reset the form fields
    document.getElementById("reset").addEventListener("click", function() {
        document.getElementById("docname").value = "";
        document.getElementById("scheduledate").value = "";
        document.getElementById("scheduletime").value = "";
    });
});
</script>
</body>
</html>