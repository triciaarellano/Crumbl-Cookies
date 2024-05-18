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
           
            $updatesql = "UPDATE user_table SET status = 'Active', otp = NULL WHERE otp = '".$user_otp."'";


            $conn->query($updatesql);
 
            header("Location: login.php");
    exit;
        } else {
            ?>
            <script>
                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "Invalid OTP",
                    showConfirmButton: false,
                    timer: 1500
                });
                </script>
        <?php
           
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



