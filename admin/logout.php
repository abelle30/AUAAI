<?php
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
        
session_start();

// Define the database credentials
$server_name="";
$db_username ="u348190438_dbalumni";
$db_password="AUAAIportal2022";
$db_name="u348190438_dbalumni";


// Update online status to 'online' before destroying the session
$conn = mysqli_connect($server_name, $db_username, $db_password, $db_name);
date_default_timezone_set('Asia/Kolkata');
$ldate=date( 'd-m-Y h:i:s A', time () );
mysqli_query($conn,"UPDATE userlog  SET logout = '$ldate' WHERE email = '".$_SESSION['login']."' ORDER BY id DESC LIMIT 1");
mysqli_close($conn);
unset($_SESSION['user_token']);
session_unset();
session_destroy();

header("location: https://auaaiconnect.online/login.php");
exit();
?>

