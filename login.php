<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="regstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

   
</head>
<body>
    <form action="login.php" method="post" enctype="multipart/form-data">

    <div class="log-container">

    <div class="reg-name">LOG IN</div>


            <!-- Text input -->
            <div class="form-outline">
                <input type="text" id="username" name="username" class="form-control" required/>
                <label class="form-label" for="username">Username</label>
            </div>

            <!-- Text input -->
            <div class="form-outline">
                <input type="password" id="password" name="password" class="form-control" required/>
                <label class="form-label" for="password">Password</label>
            </div>

            <div class="row">
                <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value=""  checked />
                        <label class="form-check-label" > Remember me </label>
                    </div>
                </div>
            </div>

            <!-- Submit button -->
            <input type="submit" name="sub" value="Log In" class="button" id="sub">

    </div>
    </form>

</script>

<?php
// Database connection
require_once "dbconnect.php";

session_start();

// Button function
if (isset($_POST['sub'])) {
    // User input
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    // Select SQL
    $loginsql = "SELECT * FROM user_table WHERE username = '".$username."' AND password = '".$password."'";

    // Convert login SQL string to query    
    $loginresult = $conn->query($loginsql);

    // Condition if valid login
    if ($loginresult && $loginresult->num_rows == 1) {
        $_SESSION['username'] = $username;
        header("Location: admin-overview.php");
        exit;
    } else {
        echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Wrong username or password!',
            text: 'hahahah mali',
        });
    </script>";
    }
}
?>

</body>
</html>
