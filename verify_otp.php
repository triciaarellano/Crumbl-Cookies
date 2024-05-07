<?php

session_start();
require_once "dbconnect.php"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user_otp = isset($_POST['otp']) ? implode("", $_POST['otp']) : '';

    $stmt = $conn->prepare("SELECT otp FROM user_table ORDER BY user_id DESC LIMIT 1");
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        
        $row = $result->fetch_assoc();
        $correct_otp = $row['otp'];

        
        if ($user_otp == $correct_otp && !empty($correct_otp)) {
            
            echo "OTP verification successful!";
            // TRY to add a mark sa OTP as verified in the database pag kinaya
            header("Location: login.php");
    exit;
        } else {

            echo "Incorrect OTP. Please try again.";
        }
    } else {

        echo "OTP record not found. Please try again.";
    }

    $stmt->close();
} else {
    header("Location: email_verification.php");
    exit;
}
?>
