<?php
session_start();

$_SESSION["user"] = "";
$_SESSION["usertype"] = "";

date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d');
$_SESSION["date"] = $date;

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $fname = filter_var($_POST['fname'], FILTER_SANITIZE_STRING);
   $lname = filter_var($_POST['lname'], FILTER_SANITIZE_STRING);
   $address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
   $nic = filter_var($_POST['nic'], FILTER_SANITIZE_STRING);
   $dob = $_POST['dob'];

   if (empty($fname)) {
       $error = "Nama depan harus diisi";
   }
   elseif (empty($lname)) {
       $error = "Nama belakang harus diisi";
   }
   elseif (empty($dob)) {
       $error = "Tanggal lahir harus diisi";
   }
   else {
       $_SESSION["personal"] = [
           'fname' => $fname,
           'lname' => $lname,
           'address' => $address,
           'nic' => $nic,
           'dob' => $dob
       ];

       header("Location: create-account");
       exit();
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
   <link rel="stylesheet" href="css/signup.css">
       
   <title>Sign Up</title>
   
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
                <h2>Selamat Datang!👋</h2>
                <p>Silakan masukkan data diri Anda</p>
           </div>
           <form action="" method="POST">
               <?php if (!empty($error)): ?>
                   <tr>
                       <td colspan="2">
                           <div class="error-message" style="color: red; text-align: center;">
                               <?php echo $error; ?>
                           </div>
                       </td>
                   </tr>
               <?php endif; ?>
               <tr>
                   <td class="label-td" colspan="2">
                       <label for="name" class="form-label">Nama Lengkap: </label>
                   </td>
               </tr>
               <tr>
                   <td class="label-td">
                       <input type="text" name="fname" class="input-text" placeholder="Masukan Nama Depan Anda" required value="<?php echo isset($fname) ? htmlspecialchars($fname) : ''; ?>">
                   </td>
                   <td class="label-td">
                       <input type="text" name="lname" class="input-text" placeholder="Masukan Nama Belakang Anda" required value="<?php echo isset($lname) ? htmlspecialchars($lname) : ''; ?>">
                   </td>
               </tr>
               <tr>
                   <td class="label-td" colspan="2">
                       <label for="address" class="form-label">Alamat: </label>
                   </td>
               </tr>
               <tr>
                   <td class="label-td" colspan="2">
                       <input type="text" name="address" class="input-text" placeholder="Masukan Alamat Lengkap Anda" value="<?php echo isset($address) ? htmlspecialchars($address) : ''; ?>">
                   </td>
               </tr>
               <tr>
                   <td class="label-td" colspan="2">
                       <label for="nic" class="form-label">NIK: </label>
                   </td>
               </tr>
               <tr>
                   <td class="label-td" colspan="2">
                       <input type="text" name="nic" class="input-text" placeholder="Masukan NIK Anda" value="<?php echo isset($nic) ? htmlspecialchars($nic) : ''; ?>">
                   </td>
               </tr>
               <tr>
                   <td class="label-td" colspan="2">
                       <label for="dob" class="form-label">Tanggal Lahir: </label>
                   </td>
               </tr>
               <tr>
                   <td class="label-td" colspan="2">
                       <input type="date" name="dob" class="input-text" value="<?php echo isset($dob) ? htmlspecialchars($dob) : ''; ?>">
                   </td>
               </tr>

               <tr>
                   <td>
                       <input type="reset" value="Reset" class="login-btn btn-primary-soft btn">
                   </td>
                   <td>
                       <input type="submit" value="Next" class="login-btn btn-primary btn">
                   </td>
               </tr>
               
               <div class="akun">
                   <td colspan="2">
                       <br>
                       <label for="" class="sub-text" style="font-weight: 280;">Sudah punya akun? </label>
                       <a href="login" class="hover-link1 non-style-link">Login</a>
                       <br><br><br>
                   </td>
               </div>
           </form>
       </div>
   </div>
</body>
</html>