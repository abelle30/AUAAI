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
                    
                      // Format the date (assuming the date is in "dd-mm-yyyy" format)
    $dateParts = explode('-', $Birthday); // Assuming "dd-mm-yyyy"
    if (count($dateParts) === 3) {
        $formattedDate = $dateParts[2] . '-' . $dateParts[1] . '-' . $dateParts[0];
    } else {
        // Handle date formatting error
        $formattedDate = null; // or some default value
    }
                    
                    
                    // Get row data
                    $id = $line[0];
                    $alumniname = $line[1];
                    $StudentNumber = $line[2];
                    $MonthGraduated = $line[3];
                    $YearGraduated = $line[4];
                     $Course = $line[5];
                      $Birthday = $line[6];
                       $Civilstatus = $line[7];
                        $Religion = $line[8];
                            $CurrentAddress = $line[9];
                                $PermanentAddress = $line[10];
                                    $ContactNumber = $line[11];
                                        $PersonalEmailAddress = $line[12];
                                            $CompanyName = $line[13];
                                             $CompanyAddress = $line[14];
                                                $Position = $line[15];
                                                 $idpic = $line[16];
                                                  $typeofcard = $line[17];
                                                   $proofofpayment = $line[18];
                                                    $esignature = $line[19];
                                                     $status = $line[20];
                    
                    
                 
    // Format the date from "dd-mm-yyyy" to "yyyy-mm-dd"
    $dateParts = explode('-', $Birthday); // Assuming "dd-mm-yyyy"
    if (count($dateParts) === 3) {
        $formattedDate = date('Y-m-d', strtotime($dateParts[2] . '-' . $dateParts[1] . '-' . $dateParts[0]));
    } 
         

                    // Check whether user already exists in the database with the same userid
                    $prevQuery = "SELECT id FROM alumniid WHERE id = '" . $conn->real_escape_string($id) . "'";
                    $prevResult = $conn->query($prevQuery);

                    if ($prevResult->num_rows > 0) {
                        // Update user data in the database
                        $conn->query("UPDATE alumniid SET alumniname = '" . $conn->real_escape_string($alumniname) . "', StudentNumber = '" . $conn->real_escape_string($StudentNumber) . "', MonthGraduated = '" . $conn->real_escape_string($MonthGraduated) . "', YearGraduated = '" . $conn->real_escape_string($YearGraduated) . "' , Course = '" . $conn->real_escape_string($Course) . "' , Birthday = '" . $conn->real_escape_string($Birthday) . "' , Civilstatus = '" . $conn->real_escape_string($Civilstatus) . "' , Religion = '" . $conn->real_escape_string($Religion) . "' , CurrentAddress = '" . $conn->real_escape_string($CurrentAddress) . "' , PermanentAddress = '" . $conn->real_escape_string($PermanentAddress) . "' , ContactNumber = '" . $conn->real_escape_string($ContactNumber) . "' , PersonalEmailAddress = '" . $conn->real_escape_string($PersonalEmailAddress) . "' , CompanyName = '" . $conn->real_escape_string($CompanyName) . "' , CompanyAddress = '" . $conn->real_escape_string($CompanyAddress) . "' , Position = '" . $conn->real_escape_string($Position) . "' , idpic = '" . $conn->real_escape_string($idpic) . "' , typeofcard = '" . $conn->real_escape_string($typeofcard) . "' , proofofpayment = '" . $conn->real_escape_string($proofofpayment) . "' , esignature = '" . $conn->real_escape_string($esignature) . "' , status = '" . $conn->real_escape_string($status) . "' WHERE id = '" . $conn->real_escape_string($id) . "'");
                    } else {
                        // Insert user data in the database
                       $conn->query("INSERT INTO alumniid (id, alumniname, StudentNumber, MonthGraduated, YearGraduated, Course, Birthday, Civilstatus, Religion, CurrentAddress, PermanentAddress, ContactNumber, PersonalEmailAddress, CompanyName, CompanyAddress, Position, idpic, typeofcard, proofofpayment, esignature, status) VALUES ('" . $conn->real_escape_string($id) . "', '" . $conn->real_escape_string($alumniname) . "', '" . $conn->real_escape_string($StudentNumber) . "', '" . $conn->real_escape_string($MonthGraduated) . "', '" . $conn->real_escape_string($YearGraduated) . "', '" . $conn->real_escape_string($Course) . "', '" . $conn->real_escape_string($Birthday) . "', '" . $conn->real_escape_string($Civilstatus) . "', '" . $conn->real_escape_string($Religion) . "', '" . $conn->real_escape_string($CurrentAddress) . "', '" . $conn->real_escape_string($PermanentAddress) . "', '" . $conn->real_escape_string($ContactNumber) . "', '" . $conn->real_escape_string($PersonalEmailAddress) . "', '" . $conn->real_escape_string($CompanyName) . "', '" . $conn->real_escape_string($CompanyAddress) . "', '" . $conn->real_escape_string($Position) . "', '" . $conn->real_escape_string($idpic) . "', '" . $conn->real_escape_string($typeofcard) . "', '" . $conn->real_escape_string($proofofpayment) . "', '" . $conn->real_escape_string($esignature) . "', '" . $conn->real_escape_string($status) . "')");

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
header("Location: managealumniid.php" . $qstring);
?>