<?php
// session_start();

// Database connection
// $database = new mysqli("localhost", "root", "", "sehati");
$database= new mysqli("localhost","ilkomerz_sehati","23Gusendra16","ilkomerz_sehati");
if ($database->connect_error) {
    die("Connection failed: " . $database->connect_error);
}

require_once 'vendor/autoload.php';

// Google client configuration
$clientID = '682994088356-mo7it1lsnh8lq84mkchkmfvsdsq69dee.apps.googleusercontent.com';
$clientSecret = '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';
// $redirectUri = 'http://localhost/sehati/login';
$redirectUri = 'https://sehati.ilkomerz.biz.id/login';

$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");
$client->addScope("https://www.googleapis.com/auth/userinfo.profile");

if (isset($_GET['code'])) {
    try {
        $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
        if (!isset($token['error'])) {
            $client->setAccessToken($token['access_token']);
            $_SESSION['access_token'] = $token['access_token']; // Simpan token akses dalam session

            $service = new Google_Service_Oauth2($client);
            $profile = $service->userinfo->get();

            $g_name = $profile['name'];
            $g_email = $profile['email'];
            $g_id = $profile['id'];
            $g_picture = $profile['picture']; // Mendapatkan URL gambar profil

            $query_check = 'SELECT * FROM patient WHERE oauth_id="' . $g_id . '"';
            $run_query_check = mysqli_query($database, $query_check);
            $d = mysqli_fetch_object($run_query_check);

            if ($d) {
                $query_update = 'UPDATE patient SET pemail="' . $g_email . '", pname="' . $g_name . '", picture="' . $g_picture . '" WHERE oauth_id="' . $g_id . '"';
                $run_query_update = mysqli_query($database, $query_update);
            } else {
                $query_insert1 = 'INSERT INTO patient (pemail, pname, oauth_id, picture) VALUES ("' . $g_email . '", "' . $g_name . '", "' . $g_id . '", "' . $g_picture . '")';
                $run_query_insert1 = mysqli_query($database, $query_insert1);

                $query_insert2 = 'INSERT INTO webuser (email, usertype) VALUES ("' . $g_email . '", "p")';
                $run_query_insert2 = mysqli_query($database, $query_insert2);
            }

            $_SESSION['user'] = $g_email;

            $result = $database->query("SELECT * FROM webuser WHERE email='$g_email'");
            if ($result->num_rows == 1) {
                $utype = $result->fetch_assoc()['usertype'];
                if ($utype == 'p') {
                    $_SESSION['usertype'] = 'p';
                    header('Location: patient/index.php');
                } elseif ($utype == 'a') {
                    $_SESSION['usertype'] = 'a';
                    header('Location: admin/index.php');
                } elseif ($utype == 'd') {
                    $_SESSION['usertype'] = 'd';
                    header('Location: doctor/index.php');
                }
            } else {
                echo "User type not found.";
            }
        } else {
            throw new Exception($token['error_description']);
        }
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
}

?>
