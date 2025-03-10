<?php 
// Load the database configuration file 
   include('resources/includes/db_conn.php'); 

 
$filename = "alumniid_" . date('Y-m-d') . ".csv"; 
$delimiter = ","; 
 
// Create a file pointer 
$f = fopen('php://memory', 'w'); 

 
// Set column headers 
$fields = array('id', 'alumniname', 'StudentNumber', 'MonthGraduated', 'YearGraduated', 'Course', 'Birthday', 'Civilstatus', 'Religion', 'CurrentAddress', 'PermanentAddress', 'ContactNumber', 'PersonalEmailAddress', 'CompanyName', 'CompanyAddress', 'Position', 'idpic', 'typeofcard', 'proofofpayment', 'esignature', 'status'); 
fputcsv($f, $fields, $delimiter); 
 
// Get records from the database 
$result = mysqli_query($conn, "SELECT * FROM alumniid ORDER BY id DESC");




if($result->num_rows > 0){ 
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $result->fetch_assoc()){ 
         $formattedBirthday = date('Y-m-d', strtotime($row['Birthday']));
        $lineData = array($row['id'], $row['alumniname'], $row['StudentNumber'],$row['MonthGraduated'],$row['YearGraduated'], $row['Course'] , $row['Birthday'] , $row['Civilstatus'] , $row['Religion'] , $row['CurrentAddress'] , $row['PermanentAddress'] , $row['ContactNumber'] , $row['PersonalEmailAddress'] , $row['CompanyName'] , $row['CompanyAddress'] , $row['Position'], $row['idpic'], $row['typeofcard'], $row['proofofpayment'], $row['esignature'], $row['status']); 
        fputcsv($f, $lineData, $delimiter); 
    } 
} 
 
// Move back to beginning of file 
fseek($f, 0); 
 
// Set headers to download file rather than displayed 
header('Content-Type: text/csv'); 
header('Content-Disposition: attachment; filename="' . $filename . '";'); 
 
// Output all remaining data on a file pointer 
fpassthru($f); 
 
// Exit from file 
exit();
?>