<?php

require_once "dbconnect.php";

session_start();

$error = '';

if (isset($_POST['sub'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $stmt = $conn->prepare("SELECT * FROM user_table WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $loginresult = $stmt->get_result();

    if ($loginresult && $loginresult->num_rows == 1) {
        $user_data = $loginresult->fetch_assoc();
        $_SESSION['username'] = $username;

        if (isset($user_data['user_id'])) {
            $user_id = $user_data['user_id'];
            $fullname = $user_data['full_name'];
            $user_type = $user_data['role'];

            $_SESSION['full_name'] = $fullname;
            $_SESSION['role'] = $user_type;
            $_SESSION['user_id'] = $user_id;

            $logsql = "INSERT INTO logs_table (user_id, action, DateTime) VALUES (?, 'Logged IN', NOW())";
            $logstmt = $conn->prepare($logsql);
            $logstmt->bind_param("i", $user_id);

            if (!$logstmt->execute()) {
                echo "Error inserting log entry: " . $conn->error;
            }

            if ($user_type == 'Employee') {
                header("Location: employee-dashboard.php");
            } elseif ($user_type == 'Cashier') {
                header("Location: homepagecashier.php");
            } elseif ($user_type == 'Admin') {
                header("Location: dashboard.php");
            } else {
                echo "Unknown user role.";
                exit;
            }
            exit;
        } else {
            echo "User ID not found.";
        }
    } else {
        $error = 'Wrong username or password!';
        echo "
        <html>
        <head>
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>
        </head>
        <body>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Wrong username or password!'
                    });
                });
            </script>
        </body>
        </html>
        ";
    }    
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
   

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>

@import url("https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

body {
  font-family: "Poppins", sans-serif;
  color: rgba(0, 0, 0, 0.7);
  margin: 0;
}

.container {
  height: 200vh;
  background-color: black;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

#video-background {
  position: absolute; 
  top: 0; 
  left: 0;
  width: 100%;
}

.input-block.invalid input {
            border-color: red;
        }

.error-message {
            color: red;
            font-size: 14px;
        }

.login-modal {
  position: fixed;
  left: 0;
  top: 0; 
  width: 100%;
  height: 60px;
  background: black;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  transition: 0.4s;
}

.login-modal-container {
  display: flex;
  max-width: 720px;
  width: 100%;
  border-radius: 10px;
  overflow: hidden;
  position: absolute;
  opacity: 0;
  pointer-events: none;
  transition-duration: 0.3s;
  background: #fff;
  transform: translateY(-100px) scale(0.4); 
}

.login-modal-title {
  font-size: 26px;
  margin-bottom: 30px;
  font-weight: 400;
  color: #ff6486;
}

.login-modal-desc {
  margin: 6px 0 30px 0;
}

.login-modal-left {
  padding: 60px 30px 20px;
  background: #fff;
  flex: 1.5;
  transition-duration: 0.5s;
  transform: translateY(80px);
  opacity: 0;
}

.login-modal-button {
  cursor: pointer;
  border: none;
  outline: none;
  padding: 0;
  background-image: url('images/crumbl-logo-pink.png');
  background-size: contain; 
  background-position: center;
  background-repeat: no-repeat;
  width: 100px; 
  height: 100px; 
  background-color: transparent; 
  box-shadow: none; 
  transition: opacity 0.3s;
}

.login-modal-button:hover {
  opacity: 0.8; 
}


.login-modal-right {
  flex: 2;
  font-size: 0;
  transition: 0.3s;
  overflow: hidden;
}

.login-modal-right img {
  width: 100%;
  height: 100%;
  transform: scale(2);
  object-fit: cover;
  transition-duration: 1.2s;
}

.login-modal.is-open {
  height: 100%;
  background: rgba(51, 51, 51, 0.85);
}

.login-modal.is-open .login-modal-button {
  opacity: 0;
}

.login-modal.is-open .login-modal-container {
  opacity: 1;
  transition-duration: 0.6s;
  pointer-events: auto;
  transform: translateY(0) scale(1); 
}

.login-modal.is-open .login-modal-right img {
  transform: scale(1);
}

.login-modal.is-open .login-modal-left {
  transform: translateY(0);
  opacity: 1;
  transition-delay: 0.1s;
}

.login-modal-buttons {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.login-modal-buttons a {
  color: rgba(51, 51, 51, 0.6);
  font-size: 14px;
}

.sign-up {
  margin: 60px 0 0;
  font-size: 14px;
  text-align: center;
}

.sign-up a {
  color: #ff6486;
}

.input-button {
  padding: 8px 1rem;
  outline: none;
  border: 0;
  color: #fff;
  border-radius: 4px;
  background: #f095a8;
  font-family: "Poppins", sans-serif;
  transition: 0.3s;
  cursor: pointer;
}

.input-button:hover {
  background: #ff6486;
}

.input-label {
  font-size: 11px;
  text-transform: uppercase;
  font-family: "Poppins", sans-serif;
  font-weight: 600;
  letter-spacing: 0.7px;
  color: #f095a8;
  transition: 0.3s;
}

.input-block {
  display: flex;
  flex-direction: column;
  padding: 10px 10px 8px;
  border: 1px solid #ddd;
  border-radius: 4px;
  margin-bottom: 20px;
  transition: 0.3s;
}

.input-block input {
  outline: 0;
  border: 0;
  padding: 4px 0 0;
  font-size: 14px;
  font-family: "Poppins", sans-serif;
}

.input-block input::placeholder {
  color: #ccc;
  opacity: 1;
}

.input-block:focus-within {
  border-color: #ff6486;
}

.input-block:focus-within .input-label {
  color: #ff6486;
}

.icon-button {
  outline: 0;
  position: absolute;
  right: 10px;
  top: 12px;
  width: 32px;
  height: 32px;
  border: 0;
  background: 0;
  padding: 0;
  cursor: pointer;
}

.scroll-down {
  position: fixed;
  top: 50%;
  left: 50%;
  display: flex;
  color: white;
  flex-direction: column;
  align-items: center;
  text-align: center;
  font-size: 32px;
  font-weight: 800;
  transform: translate(-50%, -50%);
  z-index: 9999;
}

.scroll-down svg {
  margin-top: 16px;
  width: 52px;
  fill: currentColor;
}

.crumb-text {
  font-size: 90px;
  font-weight: bold;
  color: white;
  text-align: center;
  position: absolute;
  top: 1500px;
  left: 50%;
  transform: translate(-50%, -50%);
}


@media (max-width: 750px) {
  .login-modal-container {
    width: 90%;
  }
  .login-modal-right {
    display: none;
  }
}


</style>

   
</head>
<body>
  
    <div class="scroll-down"></div>
<div class="container">
<video autoplay muted loop id="video-background">
    <source src="images/crumbl-video.mp4" height= 200vh>
    Your browser does not support the video tag.
  </video>
  <span class="crumb-text">
    EVERY LAST CRUMB.
  </span>
</div>


<div class="login-modal">
    <div class="login-modal-container">
        <div class="login-modal-left">
            <h1 class="login-modal-title">Welcome!</h1>
            <p class="login-modal-desc">Bringing friends and family together over the best desserts in the world.</p>
            <form method="POST" action="login.php"> 
                <div class="input-block">
                    <label for="username" class="input-label">Username</label>
                    <input type="text" name="username" id="username" placeholder="Username" required/>
                </div>
                <div class="input-block <?php echo $error ? 'invalid' : ''; ?>">
                    <label for="password" class="input-label">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password" required/>
                </div>
                <?php if ($error): ?>
                    <p class="error-message"><?php echo $error; ?></p>
                <?php endif; ?>
                <div class="login-modal-buttons">
                    <a href="" class="">Forgot your password?</a>
                    <input type="submit" name="sub" value="Log In" class="input-button" id="sub">
                </div>
            </form>
            <p class="sign-up">Don't have an account? <a href="registration.php">Sign up now</a></p>
        </div>

    <div class="login-modal-right">
      <img src="images/crumbl-side.png" alt="">
    </div>
    <button class="icon-button close-button">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
    <path d="M 25 3 C 12.86158 3 3 12.86158 3 25 C 3 37.13842 12.86158 47 25 47 C 37.13842 47 47 37.13842 47 25 C 47 12.86158 37.13842 3 25 3 z M 25 5 C 36.05754 5 45 13.94246 45 25 C 45 36.05754 36.05754 45 25 45 C 13.94246 45 5 36.05754 5 25 C 5 13.94246 13.94246 5 25 5 z M 16.990234 15.990234 A 1.0001 1.0001 0 0 0 16.292969 17.707031 L 23.585938 25 L 16.292969 32.292969 A 1.0001 1.0001 0 1 0 17.707031 33.707031 L 25 26.414062 L 32.292969 33.707031 A 1.0001 1.0001 0 1 0 33.707031 32.292969 L 26.414062 25 L 33.707031 17.707031 A 1.0001 1.0001 0 0 0 32.980469 15.990234 A 1.0001 1.0001 0 0 0 32.292969 16.292969 L 25 23.585938 L 17.707031 16.292969 A 1.0001 1.0001 0 0 0 16.990234 15.990234 z"></path>
</svg>
      </button>
  </div>
  <button class="login-modal-button"></button>
</div>

    </div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>

const body = document.querySelector("body");
const loginModal = document.querySelector(".login-modal");
const loginModalButton = document.querySelector(".login-modal-button");
const closeButton = document.querySelector(".close-button");
const scrollDown = document.querySelector(".scroll-down");
let isOpened = false;

const openLoginModal = () => {
  loginModal.classList.add("is-open");
  body.style.overflow = "hidden";
};

const closeLoginModal = () => {
  loginModal.classList.remove("is-open");
  body.style.overflow = "initial";
  isOpened = false; // Reset isOpened when the modal is closed
};

// if the user has scrolled to the bottom
const isAtBottom = () => {
  return window.innerHeight + window.scrollY >= document.body.offsetHeight;
};

// to check scroll position
window.addEventListener("scroll", () => {
  if (isAtBottom() && !isOpened) {
    isOpened = true;
    openLoginModal();
  }
});

loginModalButton.addEventListener("click", openLoginModal);
closeButton.addEventListener("click", closeLoginModal);

document.onkeydown = evt => {
  evt = evt || window.event;
  evt.keyCode === 27 ? closeLoginModal() : false;
};


</script>

</body>
</html>
