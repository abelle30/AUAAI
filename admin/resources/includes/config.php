<?php

$server = "localhost";
$user = "root";
$pass = "";
$dbname = "google_login";
$conn = new mysqli($server,$user, $pass, $dbname);

require_once 'vendor/autoload.php';

//init configuration
$clientID = '239445711644-as2loqv72un4sj07r71ha6v7kteevgv3.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/labactivity1/welcome.php';

//create client request to access google API
$client = new Google_Client();
$client->setClientID($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);

$client->addScope("email");
$client->addScope("profile");

if($conn->connect_error){
die('Connection Problem:'.$conn->connect_error);
}

?>