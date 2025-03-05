<?php
session_start();

include("connection.php");

$_SESSION["user"] = "";
$_SESSION["usertype"] = "";

date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d');
$_SESSION["date"] = $date;

$error = '';

if ($_POST) {
   if (!isset($_SESSION['personal']) || empty($_SESSION['personal'])) {
       header("Location: signup.php");
       exit();
   }

   $fname = $_SESSION['personal']['fname'];
   $lname = $_SESSION['personal']['lname'];
   $name = $fname . " " . $lname;
   $address = $_SESSION['personal']['address'];
   $nic = $_SESSION['personal']['nic'];
   $dob = $_SESSION['personal']['dob'];
   
   $email = filter_var($_POST['newemail'], FILTER_SANITIZE_EMAIL);
   $tele = filter_var($_POST['tele'], FILTER_SANITIZE_STRING);
   $newpassword = $_POST['newpassword'];
   $cpassword = $_POST['cpassword'];
   
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $error = 'Format email tidak valid';
   }
   elseif (strlen($newpassword) < 8) {
       $error = 'Password minimal 8 karakter';
   }
   elseif ($newpassword !== $cpassword) {
       $error = 'Konfirmasi password tidak cocok';
   }
   else {
       $stmt = $database->prepare("SELECT * FROM webuser WHERE email = ?");
       $stmt->bind_param("s", $email);
       $stmt->execute();
       $result = $stmt->get_result();
       
       if ($result->num_rows > 0) {
           $error = 'Email sudah terdaftar';
       } else {
           $database->begin_transaction();
           
           try {
               $stmt_patient = $database->prepare("INSERT INTO patient (pemail, pname, ppassword, paddress, pnic, pdob, ptel) VALUES (?, ?, ?, ?, ?, ?, ?)");
               $stmt_patient->bind_param("sssssss", $email, $name, $newpassword, $address, $nic, $dob, $tele);
               
               $stmt_webuser = $database->prepare("INSERT INTO webuser (email, usertype) VALUES (?, 'p')");
               $stmt_webuser->bind_param("s", $email);
               
               $patient_result = $stmt_patient->execute();
               $webuser_result = $stmt_webuser->execute();
               
               if ($patient_result && $webuser_result) {
                   $database->commit();
                   
                   $_SESSION["user"] = $email;
                   $_SESSION["usertype"] = "p";
                   $_SESSION["username"] = $fname;
                   
                   header('Location: patient/index.php');
                   exit();
               } else {
                   throw new Exception("Gagal menyimpan data");
               }
           } catch (Exception $e) {
               $database->rollback();
               $error = 'Terjadi kesalahan: ' . $e->getMessage();
           }
       }
       
       $stmt->close();
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
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="css/signup.css">
       
   <title>Buat Akun</title>
   
   <link rel="icon" href="img/LogoSehati.png">
</head>
<body>
<div class="row">
  <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #EAEFFF;">
      <div class="featured-image mb-3">
       <img src="img/cakit.png" class="img-fluid" style="width: 250px;">
      </div>
      <h1>Ayo Peduli Kesehatan Anda!</h1>
      <p>Lakukan pemeriksaan terhadap penyakit yang Anda alami dengan melakukan booking dokter terlebih dahulu</p>
  </div> 
  
  <div class="col-md-6 right-box">
     <div class="row align-items-center">
           <div class="header-text mb-4">
           <a href="index.php"><img src="img/LogoSehati.png" alt=""></a>
                <h2>Selamat Datang! 👋</h2>
                <p>Silakan lengkapi data akun Anda</p>
           </div>
           
           <form action="" method="POST">
               <?php if (!empty($error)): ?>
                   <tr>
                       <td colspan="2">
                           <div class="error-message" style="color: red; text-align: center;">
                               <?php echo htmlspecialchars($error); ?>
                           </div>
                       </td>
                   </tr>
               <?php endif; ?>

               <tr>
                   <td class="label-td" colspan="2">
                       <label for="newemail" class="form-label">Email: </label>
                   </td>
               </tr>
               <tr>
                   <td class="label-td" colspan="2">
                       <input type="email" name="newemail" class="input-text" placeholder="Masukkan Alamat Email" required 
                              value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>">
                   </td>
               </tr>
               <tr>
                   <td class="label-td" colspan="2">
                       <label for="tele" class="form-label">Nomor Telepon: </label>
                   </td>
               </tr>
               <tr>
                   <td class="label-td" colspan="2">
                       <input type="tel" name="tele" class="input-text" placeholder="Contoh: 081212121212" 
                              value="<?php echo isset($tele) ? htmlspecialchars($tele) : ''; ?>">
                   </td>
               </tr>
               <tr>
                   <td class="label-td" colspan="2">
                       <label for="newpassword" class="form-label">Buat Password Baru: </label>
                   </td>
               </tr>
               <tr>
                   <td class="label-td" colspan="2">
                       <input type="password" name="newpassword" class="input-text" placeholder="Password Baru" required>
                   </td>
               </tr>
               <tr>
                   <td class="label-td" colspan="2">
                       <label for="cpassword" class="form-label">Konfirmasi Password: </label>
                   </td>
               </tr>
               <tr>
                   <td class="label-td" colspan="2">
                       <input type="password" name="cpassword" class="input-text" placeholder="Konfirmasi Password" required>
                   </td>
               </tr>
    
               <tr>
                   <td>
                       <input type="reset" value="Reset" class="login-btn btn-primary-soft btn">
                   </td>
                   <td>
                       <input type="submit" value="Daftar" class="login-btn btn-primary btn">
                   </td>
               </tr>
               
               <tr>
                   <td colspan="2">
                       <br>
                       <label for="" class="sub-text" style="font-weight: 280;">Sudah punya akun? </label>
                       <a href="login.php" class="hover-link1 non-style-link">Login</a>
                       <br><br><br>
                   </td>
               </tr>
           </form>
       </div>
   </div>
</body>
</html>