<?php 
   include('resources/includes/db_conn.php'); 

if (isset($_POST['importSubmit'])) {

    // Allowed mime types
    $csvMimes = array(
        'text/x-comma-separated-values',
        'text/comma-separated-values',
        'application/octet-stream',
        'application/vnd.ms-excel',
        'application/x-csv',
        'text/x-csv',
        'text/csv',
        'application/csv',
        'application/excel',
        'application/vnd.msexcel',
        'text/plain'
    );

    // Validate whether selected file is a CSV file
    if (!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)) {

        // If the file is uploaded
        if (is_uploaded_file($_FILES['file']['tmp_name'])) {

            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');

            if ($csvFile !== false) {

                // Skip the first line
                fgetcsv($csvFile);

                // Parse data from CSV file line by line
                while (($line = fgetcsv($csvFile)) !== FALSE) {
                    
                    // Get row data
                    $id = $line[0];
                    $email = $line[1];
                    $password = $line[2];
                    $fname = $line[3];
                    $lname = $line[4];
                     $mname = $line[5];
                      $course = $line[6];
                       $suffix = $line[7];
                        $nationality = $line[8];
                            $civilstatus = $line[9];
                                $state = $line[10];
                                    $city = $line[11];
                                        $gender = $line[12];
                                            $mobileno = $line[13];
                                             $lot = $line[14];
                                                $year = $line[15];
                                                 $street = $line[16];
                                                  $usertype = $line[17];
                                                   $age = $line[18];
                                                
                                                     $status = $line[19];
                                                     
                                                     
                                                     
                                                     
                                                     
                                                     
                                            


                    
                

                    // Check whether user already exists in the database with the same userid
                     $Course = "Bachelor of Science in Architecture";
                     
                     $courseList = array(
    'Bachelor of Science in Accountancy',
    'Bachelor of Science in Business Administration Major in Financial Management',
    'Bachelor of Science in Business Administration Major in Marketing Management',
    'Bachelor of Science in Business Administration Major in Operations Management',
    'Bachelor of Science in Customs Administration',
    'Bachelor of Science in Hospitality Management'
);

$escapedCourseList = array_map(function($course) use ($conn) {
    return $conn->real_escape_string($course);
}, $courseList);

$courseListString = implode("', '", $escapedCourseList);

 $prevQuery = "SELECT id FROM users WHERE id = '" . $conn->real_escape_string($id) . "' AND Course IN ('$courseListString')";

  $prevResult = mysqli_query($conn,  $prevQuery);
                     
                     

 
                    if ($prevResult->num_rows > 0) {
                        // Update user data in the database
                        $conn->query("UPDATE users SET email = '" . $conn->real_escape_string($email) . "', password = '" . $conn->real_escape_string($password) . "', fname = '" . $conn->real_escape_string($fname) . "', lname = '" . $conn->real_escape_string($lname) . "' , mname = '" . $conn->real_escape_string($mname) . "' , course = '" . $conn->real_escape_string($course) . "' , suffix = '" . $conn->real_escape_string($suffix) . "' , nationality = '" . $conn->real_escape_string($nationality) . "' , civilstatus = '" . $conn->real_escape_string($civilstatus) . "' , state = '" . $conn->real_escape_string($state) . "' , city = '" . $conn->real_escape_string($city) . "' , gender = '" . $conn->real_escape_string($gender) . "' , mobileno = '" . $conn->real_escape_string($mobileno) . "' , lot = '" . $conn->real_escape_string($lot) . "' , year = '" . $conn->real_escape_string($year) . "' , street = '" . $conn->real_escape_string($street) . "' , usertype = '" . $conn->real_escape_string($usertype) . "' , age = '" . $conn->real_escape_string($age) . "' ,  status = '" . $conn->real_escape_string($status) . "' WHERE id = '" . $conn->real_escape_string($id) . "'");
                    } else {
                        // Insert user data in the database
                       $conn->query("INSERT INTO users (id, email, password, fname, lname, mname, course, suffix, nationality, civilstatus, state, city, gender, mobileno, lot, year ,street, usertype, age,status) VALUES ('" . $conn->real_escape_string($id) . "', '" . $conn->real_escape_string($email) . "', '" . $conn->real_escape_string($password) . "', '" . $conn->real_escape_string($fname) . "', '" . $conn->real_escape_string($lname) . "', '" . $conn->real_escape_string($mname) . "', '" . $conn->real_escape_string($course) . "', '" . $conn->real_escape_string($suffix) . "', '" . $conn->real_escape_string($nationality) . "', '" . $conn->real_escape_string($civilstatus) . "', '" . $conn->real_escape_string($state) . "', '" . $conn->real_escape_string($city) . "', '" . $conn->real_escape_string($gender) . "', '" . $conn->real_escape_string($mobileno) . "', '" . $conn->real_escape_string($lot) . "', '" . $conn->real_escape_string($year) . "', '" . $conn->real_escape_string($street) . "', '" . $conn->real_escape_string($usertype) . "', '" . $conn->real_escape_string($age) . "',  '" . $conn->real_escape_string($status) . "')");

                    }
                }

                // Close opened CSV file
                fclose($csvFile);

                $qstring = '?status=succ';
            } else {
                $qstring = '?status=err';
            }
        } else {
            $qstring = '?status=err';
        }
    } else {
        $qstring = '?status=invalid_file';
    }
}

// Redirect to the listing page
header("Location: CollegeofArchitecture.php" . $qstring);
?>