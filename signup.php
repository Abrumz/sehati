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
<?php

//learn from w3schools.com
//Unset all the server side variables

session_start();

$_SESSION["user"]="";
$_SESSION["usertype"]="";

// Set the new timezone
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d');

$_SESSION["date"]=$date;



if($_POST){

    

    $_SESSION["personal"]=array(
        'fname'=>$_POST['fname'],
        'lname'=>$_POST['lname'],
        'address'=>$_POST['address'],
        'nic'=>$_POST['nic'],
        'dob'=>$_POST['dob']
    );


    print_r($_SESSION["personal"]);
    header("location: create-account.php");




}

?>


    
<div class="row">

<!--------------------------- Left Box ----------------------------->
   <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #EAEFFF;">
       <div class="featured-image mb-3">
        <img src="img/cakit.png" class="img-fluid" style="width: 250px;">
       </div>
       <h1>Ayo Peduli Kesehatan Anda!</h1>
       <p>Lakukan pemerikasaan terhadap penyakit yang Anda alami dengan melakukan booking dokter terlebih dahulu</p>
   </div> 
   
<!-------------------- ------ Right Box ---------------------------->
    
   <div class="col-md-6 right-box">
      <div class="row align-items-center">
            <div class="header-text mb-4">
            <a href="index.html"><img src="img/LogoSehati.png" alt=""></a>
                 <h2>Selamat Datang!👋</h2>
                 <p>Silakan masukkan data diri Anda</p>
            </div>
            <tr>
                <form action="" method="POST" >
                <td class="label-td" colspan="2">
                    <label for="name" class="form-label">Nama Lengkap: </label>
                </td>
            </tr>
            <tr>
                <td class="label-td">
                    <input type="text" name="fname" class="input-text" placeholder="Masukan Nama Depan Anda" required>
                </td>
                <td class="label-td">
                    <input type="text" name="lname" class="input-text" placeholder="Masukan Nama Belakang Anda" required>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <label for="address" class="form-label">Alamat: </label>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <input type="text" name="address" class="input-text" placeholder="Masukan Alamat Lengkap Anda" required>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <label for="nic" class="form-label">NIK: </label>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <input type="text" name="nic" class="input-text" placeholder="Masukan NIK Anda" required>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <label for="dob" class="form-label">Date of Birth: </label>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <input type="date" name="dob" class="input-text" required>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                </td>
            </tr>

            <tr>
                <td>
                    <input type="reset" value="Reset" class="login-btn btn-primary-soft btn" >
                </td>
                <td>
                    <input type="submit" value="Next" class="login-btn btn-primary btn">
                </td>

            </tr>
            
            <div class = "akun">
                <td colspan="2">
                    <br>
                    <label for="" class="sub-text" style="font-weight: 280;">Already have an account&#63; </label>
                    <a href="login.php" class="hover-link1 non-style-link">Login</a>
                    <br><br><br>
                </td>
            </div>
                    </form>
            </tr>
        </div>

    </div>
</body>
</html>