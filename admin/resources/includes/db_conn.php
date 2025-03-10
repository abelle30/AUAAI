<?php   
$server_name="";
$db_username ="u348190438_dbalumni";
$db_password="AUAAIportal2022";
$db_name="u348190438_dbalumni";

$conn= mysqli_connect($server_name,$db_username,$db_password,$db_name);
if(!$conn){
    die("failed to connect to the server". mysqli_connect_error());

}else{
    //echo "connected successfully";
}
?>  