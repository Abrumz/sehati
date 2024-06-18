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

<?php

    //learn from w3schools.com

    session_start();

    if(isset($_SESSION["user"])){
        if(($_SESSION["user"])=="" or $_SESSION['usertype']!='a'){
            header("location: ../login.php");
        }

    }else{
        header("location: ../login.php");
    }
    
    include("../connection.php");
    include("../adm.php");

    // var yg dibutuhkan
    $email = "admin@example.com";
    $userType = "admin";
    $adminName = "Admin Name";
    $apassword = "admin123";
    $adminEmail = "admin@example.com";

    // Buat instance class admin
    $admin = new Admin($email, $userType, $adminEmail, $adminName, $apassword, $database);

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['csrf_token'])) {
        if ($_POST['csrf_token'] === $_SESSION['csrf_token']) {
            // Ambil data dokter dan status dari permintaan
            $docid = $_POST['docid'];
            $status = ($_POST['status'] == 'aktif') ? 1 : 0;

            // Panggil metode updateDoctorStatus
            $admin->updateDoctorStatus($docid, $status);
    
            // Kirim respons JSON
                echo json_encode(['status' => 'success', 'message' => 'Status dokter berhasil diperbaharui!']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'CSRF token tidak valid']);
            }
            exit();
    }
?>

<body class="theme-black">

<!-- Popup -->
<div id="status-popup" class="popup" style="display:none; position:fixed; top:50%; left:50%; transform: translate(-50%, -50%); background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0,0,0,0.3); z-index: 9999;">
    <p>Status dokter berhasil diperbarui!</p>
</div>
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
                        <a href="schedule"><img src="..\img\LJadwal.png" alt="home"><span>Jadwal</span></a>
                    </li>
                    <!-- <li class="active">
                        <a href="appointment"><img src="..\img\LJanTem.png" alt="home"><span>Janji Temu</span></a>
                    </li> -->
                    <li class="active">
                        <a href="patient"><img src="..\img\LPasien.png" alt="home"><span>Pasien</span></a>
                    </li>
                 
                <li>
                    <div class="user-info m-b-20">
                        <div class="image">
                            <a href=""><img src="../img/SehatiProfile.png" alt="User"></a>
                        </div>
                        <div class="detail">
                            <h6>Admin Sehati</h6>
                            <p class="m-b-0" style="word-wrap: break-word">admin@sehati.ilkomerz.biz.id</p>
                                         
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
    <a href="index" style="display: flex; flex-wrap: wrap; align-content: center;">
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
<!-- Add and Search -->

<?php
// Tambahkan token CSRF ke dalam formulir
$csrf_token = bin2hex(random_bytes(32));
$_SESSION['csrf_token'] = $csrf_token;

if($_POST){
    $keyword=$_POST["search"];
    
    $sqlmain= "select * from doctor where docemail='$keyword' or docname='$keyword' or docname like '$keyword%' or docname like '%$keyword' or docname like '%$keyword%'";
}else{
    $sqlmain= "select * from doctor order by docid desc";

}



?>

<div class="nav-doctor">
    
    
        <div class="Add-Doctor">
            <a href="add-new">
                <button class="Doctor-btn" style="display: flex; justify-content: center;">
                <input type="image" src="../img/search.png" >
                <h1>Tambah Dokter</h1>            
            </button>
            </a>
        </div>

    
    <form action="" method="post" class="header-search">
        <input type="search" name="search" class="input-text header-searchbar" placeholder="cari Dokter" list="doctors" style="background: none; display: flex; text-align: left; padding: 0px;">  
    <?php
        echo '<datalist id="doctors">';
        $list11 = $database->query("select  docname,docemail from  doctor;");

        for ($y=0;$y<$list11->num_rows;$y++){
            $row00=$list11->fetch_assoc();
            $d=$row00["docname"];
            $c=$row00["docemail"];
            echo "<option value='$d'><br/>";
            echo "<option value='$c'><br/>";
        };

    echo ' </datalist>';
    ?>

    <input type="image" src="../img/search.png" >



    </form>
</div>

<form action="" method="post" id="status-form">
        <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
        <input type="hidden" name="docid" id="docid-input">
        <input type="hidden" name="status" id="status-input">
    </form>

<!-- as -->

<tr>
                    <td colspan="4" style="padding-top:10px;">
                        <p class="heading-main12">Jumlah Dokter: <?php echo $list11->num_rows; ?></p>
                    </td>
                    
                </tr>
                <?php
                    if($_POST){
                        $keyword=$_POST["search"];
                        
                        $sqlmain= "select * from doctor where docemail='$keyword' or docname='$keyword' or docname like '$keyword%' or docname like '%$keyword' or docname like '%$keyword%'";
                    }else{
                        $sqlmain= "select * from doctor order by docid desc";

                    }



                ?>
                  
                <tr>
                   <td colspan="4">
                       <center>
                        <div class="abc scroll">
                        <table width="93%" class="sub-table scrolldown" border="0">
                        <thead>
                        <tr>
                                <th class="table-headin">
                                    
                                
                                Nama Dokter
                                
                                </th>
                                <th class="table-headin">
                                    Spesialis
                                </th>
                                <th class="table-headin">
                                    
                                    Email
                                    
                                </th>
                                <th class="table-headin">
                                    
                                    Status
                                    
                                </th>
                                <th class="table-headin">
                                    
                                    Action
                                    
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
                                    <img src="../img/notfound.svg" width="25%">
                                    
                                    <br>
                                    <p class="heading-main12" style="margin-left: 45px;font-size:20px;color:rgb(49, 49, 49)">We  couldnt find anything related to your keywords !</p>
                                    <a class="non-style-link" href="doctors"><button  class="login-btn btn-primary-soft btn"  style="display: flex;justify-content: center;align-items: center;margin-left:20px;">&nbsp; Show all Doctors &nbsp;</font></button>
                                    </a>
                                    </center>
                                    <br><br><br><br>
                                    </td>
                                    </tr>';
                                    
                                }
                                else{
                                for ( $x=0; $x<$result->num_rows;$x++){
                                    $row=$result->fetch_assoc();
                                    $docid=$row["docid"];
                                    $name=$row["docname"];
                                    $email=$row["docemail"];
                                    $status=$row["status"];
                                    $specialties=$row["specialties"];
                                    $spcil_res= $database->query("select sname from specialties where id='$specialties'");

                                    // Initialize the JavaScript confirmation popup
                                    $confirmation_popup = "onclick=\"return confirm('Apakah Anda yakin akan menghapus dokter ini?')\"";
                                    // Memeriksa apakah hasil kueri ditemukan
                                    if ($spcil_res) {
                                        // Memeriksa apakah ada baris hasil yang ditemukan
                                        if ($spcil_res->num_rows > 0) {
                                            // Jika ada, ambil baris pertama dari hasil kueri
                                            $spcil_array = $spcil_res->fetch_assoc();
                                            // Periksa apakah elemen "sname" ada dalam array
                                            if (isset($spcil_array["sname"])) {
                                                $spcil_name = $spcil_array["sname"];
                                            } else {
                                                $spcil_name = ""; // Atau berikan nilai default jika tidak ada
                                            }
                                        } else {
                                            $spcil_name = ""; // Atau berikan nilai default jika tidak ada baris hasil
                                        }
                                    } else {
                                        $spcil_name = ""; // Atau berikan nilai default jika hasil kueri tidak ada
                                    }
                                    echo '<tr>
                                    <td style="border-bottom: 1px solid var(--Color-Neutral-neutral-100, #C7CACF);"> &nbsp;'. substr($name, 0, 30) .'</td>
                                    <td style="border-bottom: 1px solid var(--Color-Neutral-neutral-100, #C7CACF);"> '.substr($spcil_name, 0, 20).' </td>
                                    <td style="border-bottom: 1px solid var(--Color-Neutral-neutral-100, #C7CACF);"> '.substr($email, 0, 20).' </td>
                                    <td style="border-bottom: 1px solid var(--Color-Neutral-neutral-100, #C7CACF);"> 
                                        <div class="select-menu" data-docid='.$docid.'>
                                            <div class="select-btn '. (($status == 1) ? 'aktif' : 'non-aktif') .'">
                                                <span class="sBtn-text">'. (($status == 1) ? 'Aktif' : 'Non-Aktif') .'</span>
                                                <i class="bx bx-chevron-down"></i>
                                            </div>
                                            <ul class="options">
                                                <li class="option" data-status="aktif">
                                                    <span class="option-text">Aktif</span>
                                                </li>
                                                <li class="option" data-status="non-aktif">
                                                    <span class="option-text">Non-Aktif</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>

                                        <td>
                                        <div style="display:flex;justify-content: center;">
                                            <a href="edit-doc?id='.($docid).'" class="non-style-link" style="padding-right:10%">
                                                <img src="../img/edit.png" alt="Edit">
                                            </a>

                                            <a href="delete-doctor?id=' . $docid . '" class="non-style-link" ' . $confirmation_popup . '>
                                                <img src="../img/delete.png" alt="Delete">
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
                        </center>
                   </td> 

                   
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
    document.addEventListener("DOMContentLoaded", function () {
    const optionMenus = document.querySelectorAll(".select-menu");
    optionMenus.forEach(optionMenu => {
        const selectBtn = optionMenu.querySelector(".select-btn"),
            options = optionMenu.querySelectorAll(".option"),
            sBtn_text = optionMenu.querySelector(".sBtn-text");

        selectBtn.addEventListener("click", () => optionMenu.classList.toggle("active"));

        options.forEach(option => {
            option.addEventListener("click", () => {
                let selectedOption = option.querySelector(".option-text").innerText;
                sBtn_text.innerText = selectedOption;
                selectBtn.className = "select-btn " + option.dataset.status;
                optionMenu.classList.remove("active");
                updateDoctorStatus(optionMenu.dataset.docid, option.dataset.status);
            });
        });

        if (selectBtn.dataset.status === "") {
            sBtn_text.innerText = "Select your status";
        }
    });

    function updateDoctorStatus(docid, status) {
        const csrfToken = document.querySelector('input[name="csrf_token"]').value;
        const formData = new FormData();
        formData.append('docid', docid);
        formData.append('status', status);
        formData.append('csrf_token', csrfToken);

        fetch('', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    const statusCell = document.querySelector(`[data-docid="${docid}"]`);
                    statusCell.querySelector(".sBtn-text").innerText = status === 'aktif' ? 'Aktif' : 'Non-Aktif';
                    const selectBtn = statusCell.querySelector(".select-btn");
                    selectBtn.className = "select-btn " + (status === 'aktif' ? 'aktif' : 'non-aktif');
                    document.getElementById('status-popup').style.display = 'block';
                    setTimeout(() => {
                        document.getElementById('status-popup').style.display = 'none';
                    }, 3000);
                } else {
                    console.error("Gagal memperbarui status dokter:", data.message);
                }
            })
            .catch(error => console.error('Error:', error));
    }
});
</script>

</body>
</html>