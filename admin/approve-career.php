<?php
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
session_start();
include('resources/includes/db_conn.php');

$career_id = $_GET['id'];
$sql = "UPDATE careers SET status = 0 WHERE id = $career_id";

if (mysqli_query($conn, $sql)) {
    // Successful update
    header("Location: manage-careers.php"); // Redirect to the career management page
    exit();
} else {
    // Error handling
    echo "Error updating record: " . mysqli_error($conn);
}
?>
