<?php
session_start();

if(isset($_SESSION["user"])){
    if(($_SESSION["user"])=="" or $_SESSION['usertype']!='a'){
        header("location: ../login.php");
        exit;
    }
}else{
    header("location: ../login.php");
    exit;
}

//import database
include("../connection.php");

// Process patient edit if form submitted
if(isset($_POST["editpatient"])) {
    $id = $_POST["pid"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $nic = $_POST["nic"];
    $tel = $_POST["tel"];
    $dob = $_POST["dob"];
    $address = $_POST["address"];
    
    // Update patient information
    $sql = "UPDATE patient SET pname=?, pemail=?, pnic=?, ptel=?, paddress=?, pdob=? WHERE pid=?";
    $stmt = $database->prepare($sql);
    $stmt->bind_param("ssssssi", $name, $email, $nic, $tel, $address, $dob, $id);
    
    if ($stmt->execute()) {
        $success_message = "Patient information updated successfully!";
    } else {
        $error_message = "Failed to update patient information: " . $database->error;
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
        width: 50%;
        padding: 20px;
        background-color: white;
        border-radius: 10px;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        max-height: 80vh;
        overflow-y: auto;
        z-index: 1000;
        box-shadow: 0px 5px 20px rgba(0,0,0,0.2);
    }
    .overlay{
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.5);
        z-index: 999;
        display: none;
    }
    .sub-table{
        animation: transitionIn-Y-bottom 0.5s;
    }
    .action-icon {
        width: 24px;
        height: 24px;
        margin: 0 5px;
        cursor: pointer;
    }
    .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
        font-size: 24px;
        color: #666;
    }
    .form-control {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }
    .form-label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }
    .btn-row {
        display: flex;
        justify-content: flex-end;
        margin-top: 20px;
    }
    .btn {
        padding: 8px 15px;
        margin-left: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    .btn-primary {
        background-color: #4568dc;
        color: white;
    }
    .btn-secondary {
        background-color: #6c757d;
        color: white;
    }
    .alert {
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 4px;
    }
    .alert-success {
        background-color: #d4edda;
        color: #155724;
    }
    .alert-danger {
        background-color: #f8d7da;
        color: #721c24;
    }
    /* Prevent popup from closing when clicking inside */
    .popup-content {
        pointer-events: auto;
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
<div id="editOverlay" class="overlay"></div><!-- Overlay For Popups -->

<!-- Left Sidebar -->
<aside id="minileftbar" class="minileftbar">
    <ul class="menu_list">
        <li>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="index.php"><img src="../img/Oncology.png" alt="Alpino"></a>
        </li>     
        <li><a href="javascript:void(0);" class="menu-sm"><i class="zmdi zmdi-swap"></i></a></li>        
        <li><a href="javascript:void(0);" class="fullscreen" data-provide="fullscreen"><i class="zmdi zmdi-fullscreen"></i></a></li>
        <li class="power">
            <a href="javascript:void(0);" class="js-right-sidebar"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a>            
            <a href="../logout.php" class="mega-menu"><i class="zmdi zmdi-power"></i></a>
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
                        <a href="index.php"><img src="..\img\Dashboard.png" alt="home"><span>Dashboard</span></a>
                    </li>
                    <li class="active">
                        <a href="doctors.php"><img src="..\img\LDokter.png" alt="home"><span>Dokter</span></a>
                    </li>
                    <li class="active">
                        <a href="schedule.php"><img src="..\img\LJadwal.png" alt="home"><span>Jadwal</span></a>
                    </li>
                    <li class="active open" style="background-color: transparent">
                        <a href="patient.php"><img src="..\img\LPasien.png" alt="home"><span>Pasien</span></a>
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
    <a href="index.php" style="display: flex; flex-wrap: wrap; align-content: center;">
        <img src="../img/back.png" style="padding-right: 8px;">
        <h2 class="Bawah">Kembali</h2>
    </a>
    <div class="Calendar">
        <div class="date-section">
            <p style="font-size: 14px;color: rgb(119, 119, 119);padding: 0;margin: 0;">
                <?php
                $todayFormatter = new IntlDateFormatter('id_ID', IntlDateFormatter::FULL, IntlDateFormatter::NONE, null, null, 'EEEE');
                $today = $todayFormatter->format(new DateTime());
                echo $today;
                ?>
            </p>
            <p class="heading-sub12" style="padding: 0;margin: 0;">
                <?php 
                $dateFormatter = new IntlDateFormatter('id_ID', IntlDateFormatter::FULL, IntlDateFormatter::NONE, null, null, 'd MMMM yyyy');
                $today = $dateFormatter->format(new DateTime());
                echo $today;

                $patientrow = $database->query("select * from patient;");
                $doctorrow = $database->query("select * from doctor;");
                $appointmentrow = $database->query("select * from appointment where appodate>='" . date('Y-m-d') . "';");
                $schedulerow = $database->query("select * from schedule where scheduledate='" . date('Y-m-d') . "';");
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

<!-- Add and Search -->
<div class="dash-body">
    <div style="display: flex; justify-content: space-between; align-items: center; padding: 10px 45px;">
        <p class="heading-main12" style="font-size:18px; color:rgb(49, 49, 49); margin: 0;">
            Jumlah Pasien: <span style="font-weight: 700;"><?php echo $patientrow ? $patientrow->num_rows : 0; ?></span>
        </p>
        
        <div class="nav-doctor" style="justify-content: flex-end; margin: 0;">  
            <form action="" method="post" class="header-search">
                <input type="search" name="search" class="input-text header-searchbar" placeholder="cari Pasien" list="patient" style="background: none; display: flex; text-align: left; padding: 0px;">  
                <?php
                echo '<datalist id="patient">';
                $list11 = $database->query("select pname, pemail from patient;");
                for ($y = 0; $y < $list11->num_rows; $y++) {
                    $row00 = $list11->fetch_assoc();
                    $d = $row00["pname"];
                    $c = $row00["pemail"];
                    echo "<option value='$d'><br/>";
                    echo "<option value='$c'><br/>";
                }
                echo '</datalist>';
                ?>
                <input type="image" src="../img/search.png">
            </form>
        </div>
    </div>

    <!-- Success/Error messages -->
    <?php if(isset($success_message)): ?>
        <div class="alert alert-success" style="width: 95%; margin: 0 auto 20px auto;">
            <?php echo $success_message; ?>
        </div>
    <?php endif; ?>
    
    <?php if(isset($error_message)): ?>
        <div class="alert alert-danger" style="width: 95%; margin: 0 auto 20px auto;">
            <?php echo $error_message; ?>
        </div>
    <?php endif; ?>

    <!-- Patient table -->
    <div class="abc scroll" style="margin: 0 auto; width: 95%;">
        <table width="100%" class="sub-table scrolldown" style="border-spacing:0;">
            <thead>
                <tr>
                    <th class="table-headin">Nama Pasien</th>
                    <th class="table-headin">NIK</th>
                    <th class="table-headin">Telepon</th>
                    <th class="table-headin">Email</th>
                    <th class="table-headin">Tanggal Lahir</th>
                    <th class="table-headin">Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_POST["search"])) {
                    $keyword = $_POST["search"];
                    $sqlmain = "select * from patient where pemail='$keyword' or pname='$keyword' or pname like '$keyword%' or pname like '%$keyword' or pname like '%$keyword%'";
                } else {
                    $sqlmain = "select * from patient order by pid desc";
                }
                
                $result = $database->query($sqlmain);
                if (!$result || $result->num_rows == 0) {
                    echo '<tr>
                    <td colspan="6">
                    <br><br><br><br>
                    <center>
                    <img src="../img/404.gif" width="25%">
                    <br>
                    <p class="heading-main12" style="margin-left: 45px;font-size:20px;color:rgb(49, 49, 49)">We couldnt find anything related to your keywords!</p>
                    <a class="non-style-link" href="patient.php"><button class="login-btn btn-primary-soft btn" style="display: flex;justify-content: center;align-items: center;margin-left:20px;">&nbsp; Show all Patients &nbsp;</button>
                    </a>
                    </center>
                    <br><br><br><br>
                    </td>
                    </tr>';
                } else {
                    for ($x = 0; $x < $result->num_rows; $x++) {
                        $row = $result->fetch_assoc();
                        $pid = $row["pid"];
                        $name = $row["pname"] ?? '';
                        $email = $row["pemail"] ?? '';
                        $nic = $row["pnic"] ?? '';
                        $dob = $row["pdob"] ?? '';
                        $tel = $row["ptel"] ?? '';
                        $address = $row["paddress"] ?? '';
                        
                        $formatted_dob = $dob ? date('d/m/Y', strtotime($dob)) : '';
                        
                        echo '<tr>
                        <td style="border-bottom: 1px solid var(--Color-Neutral-neutral-100, #C7CACF);"> &nbsp;' . substr($name, 0, 35) . '</td>
                        <td style="border-bottom: 1px solid var(--Color-Neutral-neutral-100, #C7CACF);">' . substr($nic, 0, 12) . '</td>
                        <td style="border-bottom: 1px solid var(--Color-Neutral-neutral-100, #C7CACF);">' . substr($tel, 0, 10) . '</td>
                        <td style="border-bottom: 1px solid var(--Color-Neutral-neutral-100, #C7CACF);">' . substr($email, 0, 20) . '</td>
                        <td style="border-bottom: 1px solid var(--Color-Neutral-neutral-100, #C7CACF);">' . $formatted_dob . '</td>
                        <td style="border-bottom: 1px solid var(--Color-Neutral-neutral-100, #C7CACF); text-align: center;">
                            <button onclick="showEditPopup(' . $pid . ', \'' . addslashes($name) . '\', \'' . addslashes($email) . '\', \'' . addslashes($nic) . '\', \'' . addslashes($tel) . '\', \'' . addslashes($dob) . '\', \'' . addslashes($address) . '\')" class="action-icon">
                            </button>
                        </td>
                        </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Edit Patient Popup -->
<div id="editPopup" class="popup" style="display: none;" onclick="event.stopPropagation();">
    <div class="popup-content">
        <span class="close-btn" onclick="closeEditPopup()">&times;</span>
        <h2>Edit Patient Information</h2>
        
        <form action="" method="POST" onclick="event.stopPropagation();">
            <input type="hidden" name="pid" id="edit_pid">
            
            <div>
                <label class="form-label" for="name">Full Name:</label>
                <input type="text" class="form-control" name="name" id="edit_name" required>
            </div>
            
            <div>
                <label class="form-label" for="email">Email:</label>
                <input type="email" class="form-control" name="email" id="edit_email" required>
            </div>
            
            <div>
                <label class="form-label" for="nic">NIK:</label>
                <input type="text" class="form-control" name="nic" id="edit_nic">
            </div>
            
            <div>
                <label class="form-label" for="tel">Phone Number:</label>
                <input type="text" class="form-control" name="tel" id="edit_tel">
            </div>
            
            <div>
                <label class="form-label" for="dob">Date of Birth:</label>
                <input type="date" class="form-control" name="dob" id="edit_dob">
            </div>
            
            <div>
                <label class="form-label" for="address">Address:</label>
                <textarea class="form-control" name="address" id="edit_address" rows="3"></textarea>
            </div>
            
            <div class="btn-row">
                <button type="button" class="btn btn-secondary" onclick="closeEditPopup()">Cancel</button>
                <button type="submit" class="btn btn-primary" name="editpatient">Save Changes</button>
            </div>
        </form>
    </div>
</div>
</section>

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

<script>
// Function to show edit popup with patient data
function showEditPopup(pid, name, email, nic, tel, dob, address) {
    document.getElementById('edit_pid').value = pid;
    document.getElementById('edit_name').value = name;
    document.getElementById('edit_email').value = email;
    document.getElementById('edit_nic').value = nic;
    document.getElementById('edit_tel').value = tel;
    document.getElementById('edit_dob').value = dob;
    document.getElementById('edit_address').value = address;
    
    document.getElementById('editPopup').style.display = 'block';
    // document.getElementById('editOverlay').style.display = 'block';
}

// Function to close edit popup
function closeEditPopup() {
    document.getElementById('editPopup').style.display = 'none';
    document.getElementById('editOverlay').style.display = 'none';
}

// Close popup when clicking outside the popup
document.getElementById('editOverlay').addEventListener('click', function() {
    closeEditPopup();
});

// Prevent closing when clicking inside the popup
document.getElementById('editPopup').addEventListener('click', function(event) {
    event.stopPropagation();
});
</script>
</body>
</html>