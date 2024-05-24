
 <?php
	session_start();

	require_once 'vendor/autoload.php';

	$access_token = $_SESSION['access_token'];

	$client = new Google_Client();

	$client->revokeToken($access_token);

	session_destroy();
	header('Location: login?action=logout');
 ?>