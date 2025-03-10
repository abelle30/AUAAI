<?php
// Load the database configuration file
include('resources/includes/db_conn.php');

$filename = "Science_alumni_" . date('Y-m-d') . ".csv"; // Change the filename as per your preference
$delimiter = ",";

// Create a file pointer
$f = fopen('php://memory', 'w');

// Set column headers
$fields = array('id', 'email', 'password', 'fname', 'lname', 'mname', 'course', 'suffix', 'nationality', 'civilstatus', 'state', 'city', 'gender', 'mobileno', 'lot', 'year', 'street', 'usertype', 'age', 'status');
fputcsv($f, $fields, $delimiter);

// Get records from the database for only "architecture" course type


$result = mysqli_query($conn, "SELECT * FROM users WHERE course IN ( 'Bachelor of Science in Biology',
    'Bachelor of Science in Chemistry',
    'Bachelor of Science in Computer Science',
    'Bachelor of Science in Information System',
    'Bachelor of Science in Information Technology',
    'Bachelor of Science in Psychology') ORDER BY id DESC");
if ($result->num_rows > 0) {
    // Output each row of the data, format line as csv and write to the file pointer
    while ($row = $result->fetch_assoc()) {

        $lineData = array($row['id'], $row['email'], $row['password'], $row['fname'], $row['lname'], $row['mname'], $row['course'], $row['suffix'], $row['nationality'], $row['civilstatus'], $row['state'], $row['city'], $row['gender'], $row['mobileno'], $row['lot'], $row['year'], $row['street'], $row['usertype'], $row['age'], $row['status']);
        fputcsv($f, $lineData, $delimiter);
    }
}

// Move back to the beginning of the file
fseek($f, 0);

// Set headers to download the file rather than displaying it
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="' . $filename . '";');

// Output all remaining data on the file pointer
fpassthru($f);

// Exit from the file
exit();
?>
