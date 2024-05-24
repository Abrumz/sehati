<?php
    // session_start();

    // $database= new mysqli("localhost","ilkomerz_sehati","23Gusendra16","ilkomerz_sehati");
    $database = new mysqli("localhost", "root", "", "sehati");
    if ($database->connect_error) {
        die("Connection failed:  " . $database->connect_error);
    }

    require_once 'vendor/autoload.php';

    // init configuration
    $clientID = '682994088356-0gcvafc2qun5o4o5eisgt2b1v326il1a.apps.googleusercontent.com';
    $clientSecret = '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';
    $redirectUri = 'http://localhost/sehati/login';
    // $redirectUri = 'https://sehati.ilkomerz.biz.id/sehati/login';

    // inisiasi google client
    $client = new Google_Client();

    // konfigurasi client
    $client->setClientId($clientID);
    $client->setClientSecret($clientSecret);
    $client->setRedirectUri($redirectUri);

    $client->addScope("email");
    $client->addScope("profile");

    if (isset($_GET['code'])) {

        $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

        if (!isset($token['error'])) {
            $client->setAccessToken($token['access_token']);

            // inisiasi google service oauth2
            $service = new Google_Service_Oauth2($client);
            $profile = $service->userinfo->get();

            $g_name = $profile['name'];
            $g_email = $profile['email'];
            $g_id = $profile['id'];

            // id sudah ada di database -> update data
            // id belum ada di database -> insert data

            $query_check = 'SELECT * FROM patient WHERE oauth_id="' . $g_id . '"';
            $run_query_check = mysqli_query($database, $query_check);
            $d = mysqli_fetch_object($run_query_check);

            if ($d) {
                $query_update = 'UPDATE patient SET pemail="' . $g_email . '", pname="' . $g_name . '" WHERE oauth_id="' . $g_id . '"';
                $run_query_update = mysqli_query($database, $query_update);
            } else {
                $query_insert1 = 'INSERT INTO patient (pemail, pname, oauth_id) VALUES ("' . $g_email . '", "' . $g_name . '", "' . $g_id . '")';
                $run_query_insert1 = mysqli_query($database, $query_insert1);

                $query_insert2 = 'INSERT INTO webuser (email, usertype) VALUES ("' . $g_email . '", "p")';
                $run_query_insert2 = mysqli_query($database, $query_insert2);
            }

            // Set session variables
            $_SESSION['user'] = $g_email;

            // Check user type and redirect
            $result = $database->query("SELECT * FROM webuser WHERE email='$g_email'");
            if ($result->num_rows == 1) {
                $utype = $result->fetch_assoc()['usertype'];
                if ($utype == 'p') {
                    $_SESSION['usertype'] = 'p';
                    header('Location: patient/index');
                } elseif ($utype == 'a') {
                    $_SESSION['usertype'] = 'a';
                    header('Location: admin/index');
                } elseif ($utype == 'd') {
                    $_SESSION['usertype'] = 'd';
                    header('Location: doctor/index');
                }
            } else {
                // Handle case when user type is not found
                echo "User type not found.";
            }
        } else {
            echo "Error during authentication.";
        }
    }
?>
