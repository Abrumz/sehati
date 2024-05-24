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

// Periksa apakah pengguna sudah login sebagai pasien
if(isset($_SESSION["user"]) && $_SESSION['usertype'] == 'p'){
    $useremail = $_SESSION["user"];
} else {
    // Jika belum, arahkan ke halaman login
    header("location: ../login.php");
    exit; // Hentikan eksekusi kode selanjutnya
}

// Impor koneksi database
include("../connection.php");

// Ambil data pasien dari database
$sqlmain = "SELECT * FROM patient WHERE pemail=?";
$stmt = $database->prepare($sqlmain);
$stmt->bind_param("s", $useremail);
$stmt->execute();
$userrow = $stmt->get_result();
$userfetch = $userrow->fetch_assoc();
$userid = $userfetch["pid"];
$username = $userfetch["pname"];
$email = $userfetch["pemail"];

// Proses formulir saat dikirimkan (method POST)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    // Ambil data dari formulir
    $sesi_id = $database->real_escape_string($_POST["sesi_id"]);
    $title = ''; // Kosongkan untuk saat ini
    $docid = ''; // Kosongkan untuk saat ini
    $date = ''; // Kosongkan untuk saat ini
    $time = ''; // Kosongkan untuk saat ini

    // Ambil informasi sesi yang dipilih dari database
    $sesi_query = "SELECT * FROM schedule WHERE scheduleid ='$sesi_id'";
    $sesi_result = $database->query($sesi_query);
    
    if ($sesi_result->num_rows > 0) {
        // Jika sesi ditemukan, ambil informasinya
        $sesi_data = $sesi_result->fetch_assoc();
        $title = $sesi_data['title'];
        $docid = $sesi_data['docid'];
        $date = $sesi_data['scheduledate'];
        $time = $sesi_data['scheduletime'];
    }

    // Gabungkan tanggal dan waktu menjadi format datetime yang sesuai
    $datetime = date('Y-m-d H:i:s', strtotime("$date $time"));

    // Query untuk memasukkan data booking ke dalam tabel appointment
    $query = "INSERT INTO appointment (pid, scheduleid, appodate) 
              VALUES ('$userid', '$sesi_id', '$datetime')";

    // Eksekusi query
    if ($database->query($query) === TRUE) {
        // Jika query berhasil dieksekusi, arahkan kembali ke halaman jadwal pasien
        header("location: schedule");
        exit; // Hentikan eksekusi kode selanjutnya
    } else {
        // Jika terjadi kesalahan dalam eksekusi query, tampilkan pesan error
        echo "<script>alert('Error: " . $query . "<br>" . $database->error . "');</script>";
    }
}
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
                    <!-- <li class="active">
                        <a href="doctors"><img src="..\img\LDokter.png" alt="home"><span>Dokter</span></a>
                    </li> -->
                    <!-- <li class="active">
                        <a href="appointment"><img src="..\img\LJanTem.png" alt="home"><span>Janji Temu</span></a>
                    </li> -->
                    <li class="active">
                        <a href="doctors"><img src="..\img\LDokter.png" alt="home"><span>Semua Dokter</span></a>
                    </li>
                    <li class="active open" style="background-color: transparent">
                        <a href="schedule"><img src="..\img\LJadwal.png" alt="home"><span>Jadwal Saya</span></a>
                    </li>
                 
                <li>
                    <div class="user-info m-b-20">
                        <div class="image">
                            <a href="profile"><img src="../img/SehatiProfile.png" alt="User"></a>
                        </div>
                        <div class="detail">
                            <h6><?php echo $username  ?></h6>
                            <p class="m-b-0"><?php echo $email; ?></p>
                                         
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
    <a href="schedule" style="display: flex; flex-wrap: wrap; align-content: center;">
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
        <h1>Tambah Jadwal Baru</h1>
    </div>
    <div class="form-doctor-body">
        <form method="POST">
            <div class="row">
                <div class="col">
                    <h1>Pilih Sesi Jadwal Temu</h1>
                    <select name="sesi_id" id="sesi_id" class="form-control" required onchange="setSessionInfo()">
                        <option value="">Pilih Sesi</option>
                        <?php
                        // Query untuk mengambil data sesi dari tabel schedule
                        $query = "SELECT * FROM schedule";
                        $result = $database->query($query);
                        
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
                <button class="button-doc" type="submit" name= "submit" id="submit">Tambah</button>
            </div>
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

// Fungsi untuk mengisi otomatis informasi sesi yang dipilih
function setSessionInfo() {
        var sesi_id = document.getElementById("sesi_id").value;
        var selectedOption = document.getElementById("sesi_id").querySelector("option:checked");

        var docname = selectedOption.getAttribute("data-docname");
        var scheduledate = selectedOption.getAttribute("data-scheduledate");
        var scheduletime = selectedOption.getAttribute("data-scheduletime");

        document.getElementById("docname").value = docname;
        document.getElementById("scheduledate").value = scheduledate;
        document.getElementById("scheduletime").value = scheduletime;
    }
</script>
</body>
</html>