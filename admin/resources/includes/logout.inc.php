<?php
session_start();

// Define the database credentials
$server_name="localhost";
$db_username ="root";
$db_password="";
$db_name="dbalumni";

// Update online status to 'online' before destroying the session
$conn = mysqli_connect($server_name, $db_username, $db_password, $db_name);

mysqli_close($conn);
unset($_SESSION['user_token']);
session_unset();
session_destroy();

header("location: /auaailatest/AUAAI/AUAAI/login.php");
exit();
?>