<?php
session_start();

$_SESSION = array();

session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="regstyle.css">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

<div class="logout-container">
    <div class="logout-message">
      <h2>Log out successful!</h2>
      <p>You have successfully logged out of the session.</p>
      <a href="login.php" class="login-link">Go to Log In</a>
    </div>
</div>
 
</body>
 
</html>
