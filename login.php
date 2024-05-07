<?php
// database connection
require_once "dbconnect.php";


// button function
if (isset($_POST['sub'])) {

    // user input
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    // select sql
    $loginsql = "SELECT * FROM user_table WHERE username = '".$username."' AND password = '".$password."'";

    // convert login sql string to query    
    $loginresult = $conn->query($loginsql);

    // condition if valid login
    if ($loginresult->num_rows == 1) {
        
        $_SESSION['username'] = $username;
        header("Location: admin-overview.php");
        exit;

        
    } else {
        echo "Wrong username and password!";
    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="regstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .log-container {
        position: absolute;
        max-width: 400px !important;
        width: 100%;
        top: 15%;
        left: 15%;
        background: rgb(255, 255, 255); 
        padding: 25px;
        border-radius: 8px;
        box-shadow: 0 6px 5px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(50px);
} 

</style>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</script>
</body>
</html>
