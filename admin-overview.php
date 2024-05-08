

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
  
  <!----======== CSS ======== -->
  <link rel="stylesheet" href="style.css">

  <!----===== Boxicons CSS ===== -->
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

  <!--CSS STYLING SEPARATE-->

  <style>
 
 /* .container {
  display: flex;
  flex-direction: column;
  justify-content: left;
  margin-left: 4%;
  margin-top: 2%;
  height: 120vh;
  width: 60vw;
  background-color: #f0f0f0;
  transition: left 0.3s ease; /* not working 
} 
*/

.right-container {
  position: absolute;
  top: 0;
  right: 0;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: center; 
  height: auto;
  width: 25vw; 
  background-color: rgba(255, 255, 255, 0);
  /*border: 1px solid gray; */
  transition: right 0.3s ease; /* not working */
}

.top-container,
.bottom-container {
  display: flex;
  justify-content: left;
  margin-left: 75px;
}

.middle-container {
  display: flex;
  justify-content: left;
  align-items: center;
  margin-left: 75px;
}

.top-box {
  width: 350px;
  height: 200px;
  border-radius: 8px; 
}

.middle-box {
  width: 1100px;
  height: 300px;
  border-radius: 8px; 
}

.bottom-box {
  width: 540px;
  height: 200px;
  border-radius: 8px; 
}

.account-container {
  background-color: #ccccff;
  width: 350px;
  height: 150px;
  border-radius: 8px; 
  margin-top: 35px;
  margin-bottom: 20px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

/*.right-box {
  width: 350px;
  height: 450px;
  border-radius: 8px; 
  margin: 20px;
} */

.top-box {
  background: linear-gradient(135deg, #FF8BA0, #FFD8DF);
  font-size: 32px;
  font-weight: 700;
  text-align: center;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.right-box {
  background-color: #ccffcc; 
  font-size: 32px;
  font-weight: 700;
  text-align: center;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  top: 0;
  right: 0;
  display: flex;
  flex-direction: column;
}

body.dark .top-box {
  background: linear-gradient(135deg, #ff8ba0, #242627);
  font-size: 32px;
  font-weight: 700;
  text-align: center;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
}


.middle-box {
  background-color: #ccffcc;  
  font-size: 32px;
  font-weight: 700;
  text-align: center;
}

.bottom-box {
  background-color: #ccccff;
  font-size: 32px;
  font-weight: 700;
  text-align: center;
}

.top-box,
.middle-box,
.bottom-box {
  margin: 10px;
}


.top-box:hover,
.middle-box:hover,
.bottom-box:hover {
  transform: scale(1.05);
  transition: transform 0.3s ease; 
}

.right-text {
  font-size: 70px;
  font-weight: 700;
  line-height: 1;
  justify-content: right;
  align-items: right;
}

.welcome-text {
  font-size: 23px; 
  font-weight: 500;
  color: var(--text-color);
  position: absolute;
  top: 5%;
  right: 20%;
  color: white;
}

.dashboard-text {
  font-size: 36px; 
  font-weight: bold;
  color: var(--text-color); 
  margin-top: 40px; 
  margin-left: 20px;
}


</style>

</head>

<body>

  <nav class="sidebar close">
    <header>

    <div class="image-text">
        <span class="image">
          <img src="logoonly.png" alt="">
        </span>
        
      <div class="text logo-text">
          <span class="name">Crumbl Cookies</span>
          <span class="profession">Admin</span>
        </div>
      </div>

      <i class='bx bx-chevron-right toggle'></i>
    </header>

    <div class="menu-bar">
      <div class="menu">

        <ul class="menu-links">
          <li class="nav-link">
            <a href="overview.php">
              <i class='bx bx-home-alt icon'></i>
              <span class="text nav-text">Overview</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="accounts.php">
              <i class='bx bx-user icon'></i>
              <span class="text nav-text">Accounts</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="products.php">
              <i class='bx bx-cart icon'></i>
              <span class="text nav-text">Products</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="archives.php">
              <i class='bx bx-book-bookmark icon'></i>
              <span class="text nav-text">Archives</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="inventory.php">
              <i class='bx bx-cube icon'></i>
              <span class="text nav-text">Inventory</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="transactions.php">
              <i class='bx bx-wallet icon'></i>
              <span class="text nav-text">Transactions</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="salesrecord.php">
              <i class='bx bx-cabinet icon'></i>
              <span class="text nav-text">Sales Record</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="audittrail.php">
              <i class='bx bx-bar-chart-alt-2 icon'></i>
              <span class="text nav-text">Audit Trail</span>
            </a>
          </li>

        </ul>
      </div>

      <div class="bottom-content">
        <li class="">
          <a href="login.php">
            <i class='bx bx-log-out icon'></i>
            <span class="text nav-text">Logout</span>
          </a>
        </li>

        <li class="mode">
          <div class="sun-moon">
            <i class='bx bx-moon icon moon'></i>
            <i class='bx bx-sun icon sun'></i>
          </div>
          <span class="mode-text text">Dark mode</span>

          <div class="toggle-switch">
            <span class="switch"></span>
          </div>
        </li>

      </div>
    </div>

  </nav>

  <section class="home">

  <div class="right-container">

    <div class="account-container">
     
      <div class="upload">
        <img src="noprofil.jpg" id="preview_img" width="100" height="100" alt="">
        <div class="round">
            <input type="file" name="upload_img" id="" accept="images" onchange="previewImg(event)">
            <i class="fa fa-plus" style="color: #fff; font-size: 24px; margin-top: 5px;"></i>
      </div>
      </div>

      <?php
session_start();
require_once "dbconnect.php";

$username = "Guest"; // Default username

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    // Retrieve the username from the user_table for the logged-in user
    $stmt = $conn->prepare("SELECT username FROM user_table WHERE username = ?");
    if ($stmt) {
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            // Assign the retrieved username to $username
            $username = $row['username'];
        } else {
            // Handle case where no user is found in the user_table
            // You might want to log this or handle it differently based on your application's requirements
        }
        $stmt->close(); // Close statement
    } else {
        // Handle SQL statement preparation error
        // You might want to log this or handle it differently based on your application's requirements
    }
} else {
    // Handle case where $_SESSION['username'] is not set
    // You might want to log this or handle it differently based on your application's requirements
}
?>

<div class="welcome-text">Welcome, <?php echo $username; ?>!</div>



  </div>

      <!-- <div class="right-box"> -->
      <div class="wrapper">
      <header>
        <p class="current-date"></p>
        <div class="icons">
          <span id="prev" class="material-symbols-rounded">chevron_left</span>
          <span id="next" class="material-symbols-rounded">chevron_right</span>
        </div>
      </header>
      <div class="calendar">
        <ul class="weeks">
          <li>Sun</li>
          <li>Mon</li>
          <li>Tue</li>
          <li>Wed</li>
          <li>Thu</li>
          <li>Fri</li>
          <li>Sat</li>
        </ul>
        <ul class="days"></ul>
      </div>
    </div>

      <!-- </div> 
      <div class="right-box">
      INVENTORY
      </div> -->

  </div> 
<!--
   <div class="right-text">
      EVERY
      <br>
      LAST
      <br>
      CRUMB.
    </div> -->

  </div>

  <div class="dashboard-header">

    <form action="admin-overview.php" method="post" class="search-form">
      <div class="search-box">
        <input type="text" name="search" class="search-input" placeholder="Search...">
        <button type="submit" class="search-button"><i class="bx bx-search" style="font-size: 24px; margin-top: 5px;"></i></button>
      </div>
    </form>
  </div>

  <div class="text">
    <div class="dashboard-text">DASHBOARD</div>
    <?php include "dbconnect.php"; ?>
  </div>

  <!--<div class="container"> -->

    <div class="top-container">

      <div class="top-box">
      PRODUCTS
      </div>
      <div class="top-box">
      INVENTORY
      </div>
      <div class="top-box">
      ARCHIVES
      </div>
    </div>

    <div class="middle-container">
      <div class="middle-box">
      TRANSACTIONS
      </div>
    </div>

    <div class="bottom-container">

      <div class="bottom-box">
        SALES RECORD
      </div>
      <div class="bottom-box">
        AUDIT TRAIL
      </div>
    </div>

  <!-- </div> -->
  <script>
        function previewImg(event){
            var display = document.getElementById("preview_img");
            display.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
 
</section>

  <script>
document.addEventListener("DOMContentLoaded", function() {
  const body = document.querySelector('body');
  const sidebar = document.querySelector('nav');
  const toggle = document.querySelector(".toggle");
  const modeSwitch = document.querySelector(".toggle-switch");
  const modeText = document.querySelector(".mode-text");
  const viewButtons = document.querySelectorAll(".btn-primary");
  const daysTag = document.querySelector(".days"),

//calendar
currentDate = document.querySelector(".current-date"),
prevNextIcon = document.querySelectorAll(".icons span");

let date = new Date(),
currYear = date.getFullYear(),
currMonth = date.getMonth();

const months = ["January", "February", "March", "April", "May", "June", "July",
              "August", "September", "October", "November", "December"];

const renderCalendar = () => {

    let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(), 
    lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(), 
    lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(), 
    lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate(); 

    let liTag = "";

    for (let i = firstDayofMonth; i > 0; i--) { 
        liTag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
    }

    for (let i = 1; i <= lastDateofMonth; i++) {
        
        let isToday = i === date.getDate() && currMonth === new Date().getMonth() 
                     && currYear === new Date().getFullYear() ? "active" : "";
        liTag += `<li class="${isToday}">${i}</li>`;
    }

    for (let i = lastDayofMonth; i < 6; i++) { 
        liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`
    }
    
    currentDate.innerText = `${months[currMonth]} ${currYear}`;
    daysTag.innerHTML = liTag;
}

renderCalendar();
prevNextIcon.forEach(icon => { 
    icon.addEventListener("click", () => { 
        
        currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;
        if(currMonth < 0 || currMonth > 11) { 
          
            date = new Date(currYear, currMonth, new Date().getDate());
            currYear = date.getFullYear(); 
            currMonth = date.getMonth(); 
        } else {
            date = new Date(); 
        }
        renderCalendar(); 
    });
});

//logout
document.getElementById("logoutBtn").addEventListener("click", function(event) {
    event.preventDefault();

    // Clear session data (client-side)
    sessionStorage.clear(); // Clear sessionStorage
    localStorage.clear(); // Clear localStorage

    // pwede AJAX call to clear server-side session data

    window.location.href = "login.php";
  });

//closing ng side bar
  toggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
  });

  //para sa light and dark mode
  modeSwitch.addEventListener("click", () => {
    body.classList.toggle("dark");
    if (body.classList.contains("dark")) {
      modeText.innerText = "Light mode";
    } else {
      modeText.innerText = "Dark mode";
    }
  });
});


  </script>

</body>

</html>