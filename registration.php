
<?php
require_once "dbconnect.php";
require_once "email_verification.php";

if (isset($_POST['sub'])) {
    $fullname = $_POST['full_name'];
    $usertype= $_POST['role'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $otp = rand(000000,999999); //random otp

    if (isset($_POST['role'])) {
        $role = $_POST['role'];
        if ($role === 'staff') {
            $usertype = "Staff account"; 
        } elseif ($role === 'admin') {
            $usertype = "Admin account"; 
        }
    } else {
        
    }

    $insertsql = "INSERT INTO user_table (full_name, role, email, username, password, otp)
                  VALUES ('$fullname', '$usertype', '$email', '$username', '$password','$otp')";

    $result = $conn->query($insertsql);

    if ($result === TRUE) { 
        ?>
        <script>
            Swal.fire({
                position: "center",
                icon: "success",
                title: "Successfully added",
                showConfirmButton: false,
                timer: 1500
            });
            // Redirect to login.php after showing the success message
            setTimeout(function() {
                window.location.href = "email_verification.php";
            }, 1500);
        </script>

        <?php

        send_verification($fullname,$email,$otp);



    } else {
        echo $conn->error; // Display table error
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="regstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <form action="registration.php" method="post" enctype="multipart/form-data">

    <div class="reg-container">

    <div class="reg-name">REGISTRATION</div>

    
    <div class="row">

                <div class="col">
                <div class="form-outline">
                    <input type="text" id="full_name" name="full_name" class="form-control" placeholder="Type your name" required>
                    <label class="form-label" id="full_name" for="firstname">Full name</label>
                </div>
                </div>

            <!-- Email input -->
            <div class="col">
            <div class="form-outline">
                <input type="text" id="email"  name="email" class="form-control" placeholder="Type your email" required>
                <label class="form-label" for="email">Email</label>
            </div>
            </div>

            <!-- Text input -->
            <div class="form-outline">
                <input type="text" id="username"  name="username" class="form-control" required/>
                <label class="form-label" for="username">Username</label>
            </div>

            <!-- Text input -->
            <div class="form-outline">
                <input type="password" id="password"  name="password" class="form-control" required/>
                <label class="form-label" for="password">Password</label>
            </div>

            <div class="form-outline my-4">
            <span class="form-label ">User Type</span>
                <div class="btn-group mx-5" id="btn-group-3" >

                    <div class="form-check form-check-inline ">
                        <input class="form-check-input" name="role" type="radio" id="staff" value="Staff" />
                        <label class="form-check-label" for="staff">Staff</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" name="role" type="radio" id="admin" value="Admin" />
                        <label class="form-check-label" for="admin">Admin</label>
                    </div>

                </div>
            </div>

            <div class="div-login">
                <p class="p-login">Already have an account? <a href="login.php">Log In</a></p>
            </div>
            
            <input type="submit"  name="sub" class="button" value="Save Details" id=sub>

        </form>

    
    </div>
   <!-- <script>
        function previewImg(event){
            var display = document.getElementById("preview_img");
            display.src = URL.createObjectURL(event.target.files[0]);
        }
    </script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</script>

</body>
</html>

