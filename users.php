<?php
header("Content-Type:application/json");
include('resources/includes/db_conn.php');

$sql = "SELECT DISTINCT id, email, fname, lname, mname, course, suffix, nationality, civilstatus, state, city, gender, mobileno, lot, year, street, usertype, age, role, status FROM users";

$result = mysqli_query($conn, $sql);
if($result !=null){
$myArray = array();
while($row = mysqli_fetch_assoc($result)) {
$tempArr = array(
"id" => $row['id'],
"email" => $row['email'],
"fname" => $row['fname'],
"lname" => $row['lname'],
"mname" => $row['mname'],
"course" => $row['course'],
"suffix" => $row['suffix'],
"nationality" => $row['nationality'],
"civilstatus" => $row['civilstatus'],
"state" => $row['state'],
"city" => $row['city'],
"gender" => $row['gender'],
"mobileno" => $row['mobileno'],
"lot" => $row['lot'],
"year" => $row['year'],
"street" => $row['street'],
"usertype" => $row['usertype'],
"age" => $row['age'],
"role" => $row['role'],
"status" => $row['status']);
array_push($myArray, $tempArr);
}
$obj = (object) [
"Sample" => "Sample",
"data" => $myArray
];

response($obj);
mysqli_close($conn);
}
function response($myArray) {
echo json_encode($myArray);
}

?>