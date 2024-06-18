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
    <?php

    //learn from w3schools.com
    //Unset all the server side variables

    session_start();
    var_dump($_SESSION);


    $_SESSION["user"]="";
    $_SESSION["usertype"]="";
    
    // Set the new timezone
    date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d');

    $_SESSION["date"]=$date;
    

    //import database
    include("connection.php");
    include("google.php");

    



    if($_POST){

        $email=$_POST['useremail'];
        $password=$_POST['userpassword'];
        
        $error='<label for="promter" class="form-label"></label>';

        $result= $database->query("select * from webuser where email='$email'");
        if($result->num_rows==1){
            $utype=$result->fetch_assoc()['usertype'];
            if ($utype=='p'){
                //TODO
                $checker = $database->query("select * from patient where pemail='$email' and ppassword='$password'");
                if ($checker->num_rows==1){


                    //   Patient dashbord
                    $_SESSION['user']=$email;
                    $_SESSION['usertype']='p';
                    
                    header('location: patient/index');

                }else{
                    $error='<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">Email atau Kata Sandi Salah/Tidak ditemukan</label>';
                }

            }elseif($utype=='a'){
                //TODO
                $checker = $database->query("select * from admin where aemail='$email' and apassword='$password'");
                if ($checker->num_rows==1){


                    //   Admin dashbord
                    $_SESSION['user']=$email;
                    $_SESSION['usertype']='a';
                    
                    header('location: admin/index');

                }else{
                    $error='<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">Wrong credentials: Invalid email or password</label>';
                }


            }elseif($utype=='d'){
                //TODO
                $checker = $database->query("select * from doctor where docemail='$email' and docpassword='$password'");
                if ($checker->num_rows==1){


                    //   doctor dashbord
                    $_SESSION['user']=$email;
                    $_SESSION['usertype']='d';
                    header('location: doctor/index');

                }else{
                    $error='<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">Wrong credentials: Invalid email or password</label>';
                }

            }
            
        }else{
            $error='<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">We cant found any acount for this email.</label>';
        }






        
    }else{
        $error='<label for="promter" class="form-label">&nbsp;</label>';
    }

    ?>


<!----------------------- Main Container -------------------------->
<!-- <div class="container d-flex justify-content-center align-items-center min-vh-100"> -->
    
    <!----------------------- Login Container -------------------------->
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
                <a href="index"><img src="img/LogoSehati.png" alt=""></a>
                     <h2>Selamat Datang!👋</h2>
                     <p>Silakan masukkan data akun Anda</p>
                </div>
                <div class="form-body">
                        <form action="" method="POST">
                            <label for="useremail" class="form-label">Username / Email: </label>
                            <input type="email" name="useremail" class="input-text" placeholder="Email" required>
                            <label for="userpassword" class="form-label">Kata Sandi: </label>
                            <input type="password" name="userpassword" class="input-text" placeholder="Kata Sandi" >
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
                    </br>
                    </br>
                    </br>
                    </br>
                    
          </div>
       </div> 
      </div>
    </div>

<!-- <center> -->
   
<!-- </center> -->


</body>
</html>