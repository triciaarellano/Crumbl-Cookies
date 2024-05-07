<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!----======== CSS ======== -->
  <link rel="stylesheet" href="style.css">

  <!----===== Boxicons CSS ===== -->
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

  <!--CSS STYLING SEPARATE-->

  <style>

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.flex-container {
  width: 100%;
  height: auto;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  margin: 10px;
}

.flex-box {
  width: 200px;
  height: 200px;
  background: pink;
  font-size: 25px;
  text-align: center;
  line-height: 200px;
  border-radius: 20px;
  margin: 10px;
  box-shadow: -5px 5px 20px 10px rgba(0, 0, 0, 0.1);
}


.right-container {
  position: absolute;
  top: 0;
  right: 0;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: center; 
  height: 130vh;
  width: 25vw; 
  background-color: var(--body-color);
  /*border: 1px solid gray; */
  transition: right 0.3s ease; /* not working */
}


.account-container {
  background-color: #ccccff;
  width: 350px;
  height: 150px;
  border-radius: 8px; 
  margin-top: 35px;
  margin-bottom: 20px;
}

.right-box {
  width: 350px;
  height: 450px;
  border-radius: 8px; 
  margin: 20px;
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
          <span class="profession">Staffs</span>
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
          <a href="#">
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

      <div class="welcome-text">BASTA NAME</div>

  </div>

      <div class="right-box">
      PRODUCTS
      </div>
      <div class="right-box">
      INVENTORY
      </div>

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
    <?php include "dbconnect.php"; ?>
  </div>

  <!--<div class="container"> -->

   <div class="flex-container">

    <div class="flex-box">
      Box1
    </div>
    <div class="flex-box">
      Box2
    </div>
    <div class="flex-box">
      Box3
    </div>
    <div class="flex-box">
      Box4
    </div>
    <div class="flex-box">
      Box5
    </div>
    <div class="flex-box">
      Box6
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


  toggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
  });

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