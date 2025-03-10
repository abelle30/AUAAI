<?php
include('resources/includes/db_conn.php');

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user's submitted data
    $email = $_POST["email"];
    $token = $_POST["token"];
    $new_password = $_POST["new_password"];
    $confirm_password = $_POST["confirm_password"];

    // Validate the new password
    if (empty($new_password) || strlen($new_password) < 8) {
        $_SESSION['error'] = "Password must be at least 8 characters long";
        header("Location: reset-password.php?email=" . urlencode($email) . "&token=" . urlencode($token));
        exit();
    }

    // Check if the new password matches the confirm password
    if ($new_password !== $confirm_password) {
        $_SESSION['error'] = "Passwords do not match";
        header("Location: reset-password.php?email=" . urlencode($email) . "&token=" . urlencode($token));
        exit();
    }

    // Update the user's password in the database
    $db_host = '';
    $db_user = 'u348190438_dbalumni';
    $db_pass = 'AUAAIportal2022';
    $db_name = 'u348190438_dbalumni';

    try {
        $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $hashed_password = md5($new_password);

        $update_stmt = $pdo->prepare("UPDATE users SET password = :password WHERE email = :email");
        $update_stmt->bindParam(':password', $hashed_password, PDO::PARAM_STR);
        $update_stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $update_stmt->execute();

        // Delete the reset token from the reset_tokens table
        $delete_stmt = $pdo->prepare("DELETE FROM reset_tokens WHERE user_email = :user_email AND reset_token = :reset_token");
        $delete_stmt->bindParam(':user_email', $email, PDO::PARAM_STR);
        $delete_stmt->bindParam(':reset_token', $token, PDO::PARAM_STR);
        $delete_stmt->execute();

        $_SESSION['success'] = "Password reset successfully. You can now log in with your new password.";
        
        header("Location: login.php");
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
