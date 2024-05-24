<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

function send_verification($fullname, $email, $otp) {
    $mail = new PHPMailer(true);  // Passing `true` enables exceptions
    try {
        $mail->isSMTP();  // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;  // Enable SMTP authentication
        $mail->Username = 'triciaa.arellano@gmail.com';  // SMTP username
        $mail->Password = 'bfooxsubcjzlxedk';  // SMTP password
        $mail->SMTPSecure = 'tls';  // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;  // TCP port to connect to

        // Recipients
        $mail->setFrom('triciaa.arellano@gmail.com', 'Crumbl Cookies');
        $mail->addAddress($email);  // Add a recipient

        // Content
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = "OTP Verification";
        $mail->Body = "Hello " . $fullname . "<br> This is your account verification code: " . $otp;

        $mail->send();

        echo "<script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Please check your email for the OTP verification.',
                showConfirmButton: false,
                timer: 1500,
                willClose: () => {
                    window.location.href = 'otp.php'; // Redirect to otp.php
                }
            });
        </script>";
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}

?>


