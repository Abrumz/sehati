<?php
ob_start(); // Tambahkan buffer output untuk menghindari masalah header redirect
session_start();

$_SESSION["user"] = "";
$_SESSION["usertype"] = "";

date_default_timezone_set('Asia/Jakarta');
$date = date('Y-m-d');
$_SESSION["date"] = $date;

include("connection");
include("google");

// Aktifkan pelaporan error untuk debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function debug_to_console($data) {
    echo "<script>console.log('Debug: " . json_encode($data) . "');</script>";
}

$error = '<label for="promter" class="form-label">&nbsp;</label>';

if($_POST) {
    $email = $_POST['useremail'];
    $password = $_POST['userpassword'];
    
    debug_to_console("Login attempt for: " . $email);
    
    $result = $database->query("SELECT * FROM webuser WHERE email='$email'");
    
    if($result && $result->num_rows == 1) {
        $user_data = $result->fetch_assoc();
        $utype = $user_data['usertype'];
        
        debug_to_console("User found with type: " . $utype);
        
        if($utype == 'p') {
            $checker = $database->query("SELECT * FROM patient WHERE pemail='$email' AND ppassword='$password'");
            
            debug_to_console("Patient query result rows: " . ($checker ? $checker->num_rows : "query failed"));
            
            if($checker && $checker->num_rows == 1) {
                $_SESSION['user'] = $email;
                $_SESSION['usertype'] = 'p';
                
                debug_to_console("Patient login successful, redirecting...");
                
                // Gunakan URL absolute untuk redirect
                $base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]" . dirname($_SERVER['PHP_SELF']);
                
                // Gunakan JavaScript untuk redirect sebagai fallback
                echo "<script>window.location.href = '" . $base_url . "/patient/index';</script>";
                
                // Coba gunakan header redirect juga
                header("Location: " . $base_url . "/patient/index");
                ob_end_flush();
                exit();
            } else {
                $error = '<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">Email atau Kata Sandi Salah/Tidak ditemukan</label>';
            }
        } elseif($utype == 'a') {
            $checker = $database->query("SELECT * FROM admin WHERE aemail='$email' AND apassword='$password'");
            
            debug_to_console("Admin query result rows: " . ($checker ? $checker->num_rows : "query failed"));
            
            if($checker && $checker->num_rows == 1) {
                $_SESSION['user'] = $email;
                $_SESSION['usertype'] = 'a';
                
                // Gunakan URL absolute untuk redirect
                $base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]" . dirname($_SERVER['PHP_SELF']);
                
                // Gunakan JavaScript untuk redirect sebagai fallback
                echo "<script>window.location.href = '" . $base_url . "/admin/index';</script>";
                
                // Coba gunakan header redirect juga
                header("Location: " . $base_url . "/admin/index");
                ob_end_flush();
                exit();
            } else {
                $error = '<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">Email atau Kata Sandi Salah/Tidak ditemukan</label>';
            }
        } elseif($utype == 'd') {
            $checker = $database->query("SELECT * FROM doctor WHERE docemail='$email' AND docpassword='$password'");
            
            debug_to_console("Doctor query result rows: " . ($checker ? $checker->num_rows : "query failed"));
            
            if($checker && $checker->num_rows == 1) {
                $_SESSION['user'] = $email;
                $_SESSION['usertype'] = 'd';
                
                // Gunakan URL absolute untuk redirect
                $base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]" . dirname($_SERVER['PHP_SELF']);
                
                // Gunakan JavaScript untuk redirect sebagai fallback
                echo "<script>window.location.href = '" . $base_url . "/doctor/index';</script>";
                
                // Coba gunakan header redirect juga
                header("Location: " . $base_url . "/doctor/index");
                ob_end_flush();
                exit();
            } else {
                $error = '<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">Email atau Kata Sandi Salah/Tidak ditemukan</label>';
            }
        }
    } else {
        $error = '<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">Akun dengan email tersebut tidak ditemukan</label>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/animations.css">  
        <link rel="stylesheet" href="css/main.css">  
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="css/login.css">
        <title>Sehati Login</title>
        <link rel="icon" href="img/LogoSehati.png">
    </head>
<body>
    <div class="row">
       <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #EAEFFF;">
           <div class="featured-image mb-3">
            <img src="img/cakit.png" class="img-fluid" style="width: 250px;">
           </div>
           <h1>Ayo Peduli Kesehatan Anda!</h1>
           <p>Lakukan pemerikasaan terhadap penyakit yang Anda alami dengan melakukan booking dokter terlebih dahulu</p>
       </div>
        
       <div class="col-md-6 right-box">
          <div class="row align-items-center">
                <div class="header-text mb-4">
                <a href="index"><img src="img/LogoSehati.png" alt=""></a>
                     <h2>Selamat Datang!ðŸ‘‹</h2>
                     <p>Silakan masukkan data akun Anda</p>
                </div>
                <div class="form-body">
                        <form action="" method="POST">
                            <label for="useremail" class="form-label">Username / Email: </label>
                            <input type="email" name="useremail" class="input-text" placeholder="Email" required>
                            <label for="userpassword" class="form-label">Kata Sandi: </label>
                            <input type="password" name="userpassword" class="input-text" placeholder="Kata Sandi" required>
                            <br>
                            <?php echo $error ?>
                            <input type="submit" value="Masuk" class="login-btn btn-primary btn">
                            <div class="line">
                                <span>Atau</span>
                            </div>
                            <div class="input-group mb-3">
                            <a href="<?= $client->createAuthUrl();?>"  class="btn btn-lg btn-light w-100 fs-6">
                                <img src="https://logopng.com.br/logos/google-37.png" style="width:20px" class="me-2">
                                <small>Sign In with Google</small>
                            </a>
                        </form>
                    </div>
                    <br>
                    <label for="" class="sub-text" style="font-weight: 280;">Belum Punya Akun? </label>
                    <a href="signup" class="hover-link1 non-style-link">Daftar</a>
                    </br></br></br></br>
          </div>
       </div> 
      </div>
    </div>
</body>
</html>