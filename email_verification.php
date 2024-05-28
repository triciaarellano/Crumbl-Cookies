<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crumbl Cookies OTP Verification</title>

    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.7/dist/sweetalert2.min.css" rel="stylesheet">
</head>
<body>


<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

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
        $mail->Subject = "Crumbl Cookies OTP Verification Code";
        $mail->Body = "Hello " . $fullname . "! <br><br> This is your account verification code: " . $otp;

        $mail->send();

        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>
              <script>
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

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
