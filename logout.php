<?php
session_start();

require_once 'vendor/autoload.php';

// Revoke token
if (isset($_SESSION['access_token'])) {
    $client = new Google_Client();
    $client->setAccessToken($_SESSION['access_token']);
    $client->revokeToken($_SESSION['access_token']);
}

// Destroy session
session_destroy();

// Clear session cookies
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000, 
        $params["path"], $params["domain"], 
        $params["secure"], $params["httponly"]
    );
}

// Redirect to login page
header('Location: login.php?action=logout');
exit();
?>
